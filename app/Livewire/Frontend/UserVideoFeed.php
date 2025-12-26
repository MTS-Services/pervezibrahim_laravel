<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\TikTokVideo;
use App\Services\TikTokService;
use Illuminate\Support\Facades\Log;

class UserVideoFeed extends Component
{
    public $username;

    // public $keywords = [];
    public $displayName;
    public $videos = [];
    public $loading = true;
    public $error = null;

    // Pagination properties
    public $currentPage = 1;
    public $videosPerPage = 9;

    // Cache total count to avoid repeated queries
    private $cachedTotalVideos = null;

    protected $tiktokService;

    public function boot(TikTokService $tiktokService)
    {
        $this->tiktokService = $tiktokService;
    }

    public function mount($username)
    {
        $this->username = $username;

        // Get display name (author_nickname) from first video of this user
        $firstVideo = TikTokVideo::where('is_active', true)
            ->where('username', $username)
            // ->whereNotNull('author_nickname')
            ->first();

        if (!$firstVideo) {
            $this->error = 'No videos found for this user.';
            $this->loading = false;
            return;
        }

        $this->displayName = $firstVideo->author_nickname ?: $username;

        $this->loadVideos();
    }

    // Replace the loadVideos() method:

    public function loadVideos()
    {
        $this->loading = true;
        $this->error = null;

        try {
            // Query videos from database for this specific user with keywords relationship
            $query = TikTokVideo::with(['videoKeywords'])
                ->where('is_active', true)
                ->where('username', $this->username)
                ->orderBy('create_time', 'desc');

            // Get total count for pagination and cache it
            $this->cachedTotalVideos = $query->count();

            // Get videos for current page
            $videosCollection = $query->skip(($this->currentPage - 1) * $this->videosPerPage)
                ->take($this->videosPerPage)
                ->get();

            $this->videos = $videosCollection;

            // dd($this->videos);

            // $this->keywords = Keyword::with('videos')->withCount('videos')->get();

            Log::info('UserVideoFeed - Videos loaded from database', [
                'username' => $this->username,
                'page' => $this->currentPage,
                'videos_count' => count($this->videos),
                'total_videos' => $this->cachedTotalVideos,
            ]);
        } catch (\Exception $e) {
            $this->error = 'Failed to load videos: ' . $e->getMessage();
            Log::error('UserVideoFeed - Video loading failed', [
                'username' => $this->username,
                'error' => $e->getMessage(),
                'page' => $this->currentPage,
            ]);
            $this->videos = [];
        }

        $this->loading = false;
    }

    private function getTikTokUrl($username, $videoId)
    {
        $url = "https://www.tiktok.com/@{$username}/video/{$videoId}";


        return $url;
    }

    // Replace the extractHashtagsAsTextExtra() method:

    /**
     * Convert keywords array to text_extra format
     */
    private function formatKeywordsAsTextExtra($keywords)
    {
        if (empty($keywords)) {
            return [];
        }

        $textExtra = [];
        foreach ($keywords as $keyword) {
            $textExtra[] = [
                'hashtag_name' => $keyword,
            ];
        }

        return $textExtra;
    }

    /**
     * Get total videos count (uses cache if available)
     */
    private function getTotalVideosCount()
    {
        if ($this->cachedTotalVideos === null) {
            $this->cachedTotalVideos = $this->getFilteredQuery()->count();
        }
        return $this->cachedTotalVideos;
    }

    /**
     * Get filtered query for this user
     */
    private function getFilteredQuery()
    {
        return TikTokVideo::where('is_active', true)
            ->where('username', $this->username);
    }

    public function shouldShowPagination()
    {
        return $this->getTotalVideosCount() > $this->videosPerPage;
    }

    public function goToPage($page)
    {
        if ($page < 1) {
            return;
        }

        $totalPages = ceil($this->getTotalVideosCount() / $this->videosPerPage);

        if ($page > $totalPages) {
            return;
        }

        $this->currentPage = $page;
        $this->loadVideos();

        $this->dispatch('scroll-to-user-videos');
    }

    public function nextPage()
    {
        if ($this->hasNextPage()) {
            $this->currentPage++;
            $this->loadVideos();
            $this->dispatch('scroll-to-user-videos');
        }
    }

    public function previousPage()
    {
        if ($this->hasPreviousPage()) {
            $this->currentPage--;
            $this->loadVideos();
            $this->dispatch('scroll-to-user-videos');
        }
    }

    public function hasNextPage()
    {
        $totalPages = ceil($this->getTotalVideosCount() / $this->videosPerPage);
        return $this->currentPage < $totalPages;
    }

    public function hasPreviousPage()
    {
        return $this->currentPage > 1;
    }

    public function getTotalPages()
    {
        return max(1, ceil($this->getTotalVideosCount() / $this->videosPerPage));
    }

    public function getUsersProperty()
    {
        $users = ['All' => 'All'];

        // Get distinct author nicknames from active videos
        $authors = TikTokVideo::where('is_active', true)->distinct('username')
            ->pluck('username', 'author_nickname')
            ->toArray();
        return array_merge($users, $authors);
    }

    public function formatNumber($number)
    {
        return $this->tiktokService->formatNumber($number);
    }

    public function render()
    {
        return view('livewire.frontend.user-video-feed');
    }
}
