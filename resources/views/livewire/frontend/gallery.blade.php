<div>
    <section class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden container mx-auto">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-80 pointer-events-none ">
            <img src="{{ asset('assets/images/home_page/background_images.png') }}" alt=""
                class="w-full h-full object-cover " />
        </div>

        <!-- Header / Navigation -->
        <header class="relative z-10 flex items-center justify-between px-6 lg:px-16 py-8">


        </header>

        <!-- Hero Content -->
        <main class="relative z-10 container mx-auto px-6 lg:px-16 mt-12 grid lg:grid-cols-2 gap-12 items-center">
            <!-- Right: Text Section -->
            <div class="flex flex-col mt-32">
                <h1 class="text-3xl space-8 font-bold text-wrap text-white">
                    Discover how<br> ebSixOne works!

                </h1>
            </div>
        </main>
    </section>

    <section class="pt-20">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($videos as $video)
                    <x-video-player :video="$video" />
                @endforeach
            </div>
            @if ($videos->isEmpty())
                <p class="text-center text-second-500 text-xl font-bold">No videos available at the moment.</p>
            @endif
        </div>
    </section>

    {{-- <script>
        function videoManager() {
            return {
                currentPlayingVideo: null,

                pauseAllVideos(exceptVideo = null) {
                    document.querySelectorAll('video').forEach(video => {
                        if (video !== exceptVideo) {
                            video.pause();
                        }
                    });
                }
            }
        }

        function videoPlayer() {
            return {
                playing: false,
                muted: false,
                progress: 0,
                duration: 0,
                pictureInPicture: false,
                theaterMode: false,

                init() {
                    this.$refs.video.addEventListener('play', () => {
                        this.playing = true;
                        // Pause all other videos when this one plays
                        document.querySelectorAll('video').forEach(video => {
                            if (video !== this.$refs.video && !video.paused) {
                                video.pause();
                            }
                        });
                    });

                    this.$refs.video.addEventListener('pause', () => {
                        this.playing = false;
                    });
                },

                togglePlay() {
                    const video = this.$refs.video;
                    if (video.paused) {
                        video.play();
                        this.playing = true;
                    } else {
                        video.pause();
                        this.playing = false;
                    }
                },

                toggleMute() {
                    const video = this.$refs.video;
                    video.muted = !video.muted;
                    this.muted = video.muted;
                },

                skipBackward() {
                    const video = this.$refs.video;
                    video.currentTime = Math.max(0, video.currentTime - 10);
                },

                skipForward() {
                    const video = this.$refs.video;
                    video.currentTime = Math.min(video.duration, video.currentTime + 10);
                },

                updateProgress() {
                    const video = this.$refs.video;
                    if (video.duration) {
                        this.progress = (video.currentTime / video.duration) * 100;
                    }
                },

                seek(event) {
                    const video = this.$refs.video;
                    const rect = event.currentTarget.getBoundingClientRect();
                    const pos = (event.clientX - rect.left) / rect.width;
                    video.currentTime = pos * video.duration;
                },

                togglePictureInPicture() {
                    const video = this.$refs.video;
                    if (document.pictureInPictureElement) {
                        document.exitPictureInPicture();
                        this.pictureInPicture = false;
                    } else {
                        video.requestPictureInPicture();
                        this.pictureInPicture = true;
                    }
                },

                toggleTheaterMode() {
                    this.theaterMode = !this.theaterMode;
                    // Add visual feedback or implement actual theater mode behavior
                },

                toggleFullscreen() {
                    const container = this.$el;
                    if (!document.fullscreenElement) {
                        container.requestFullscreen();
                    } else {
                        document.exitFullscreen();
                    }
                }
            }
        }
    </script> --}}
    <script>
        function videoManager() {
            return {
                currentPlayingVideo: null,

                pauseAllVideos(exceptVideo = null) {
                    document.querySelectorAll('video').forEach(video => {
                        if (video !== exceptVideo) {
                            video.pause();
                        }
                    });
                }
            }
        }

        function videoPlayer() {
            return {
                playing: false,
                muted: false,
                progress: 0,
                duration: 0,
                pictureInPicture: false,
                theaterMode: false,

                init() {
                    this.$refs.video.addEventListener('play', () => {
                        this.playing = true;
                        // Pause all other videos when this one plays
                        document.querySelectorAll('video').forEach(video => {
                            if (video !== this.$refs.video && !video.paused) {
                                video.pause();
                            }
                        });
                    });

                    this.$refs.video.addEventListener('pause', () => {
                        this.playing = false;
                    });
                },

                togglePlay() {
                    const video = this.$refs.video;
                    if (video.paused) {
                        video.play();
                        this.playing = true;
                    } else {
                        video.pause();
                        this.playing = false;
                    }
                },

                toggleMute() {
                    const video = this.$refs.video;
                    video.muted = !video.muted;
                    this.muted = video.muted;
                },

                skipBackward() {
                    const video = this.$refs.video;
                    video.currentTime = Math.max(0, video.currentTime - 10);
                },

                skipForward() {
                    const video = this.$refs.video;
                    video.currentTime = Math.min(video.duration, video.currentTime + 10);
                },

                updateProgress() {
                    const video = this.$refs.video;
                    if (video.duration) {
                        this.progress = (video.currentTime / video.duration) * 100;
                    }
                },

                seek(event) {
                    const video = this.$refs.video;
                    const rect = event.currentTarget.getBoundingClientRect();
                    const pos = (event.clientX - rect.left) / rect.width;
                    video.currentTime = pos * video.duration;
                },

                togglePictureInPicture() {
                    const video = this.$refs.video;
                    if (document.pictureInPictureElement) {
                        document.exitPictureInPicture();
                        this.pictureInPicture = false;
                    } else {
                        video.requestPictureInPicture();
                        this.pictureInPicture = true;
                    }
                },

                toggleTheaterMode() {
                    this.theaterMode = !this.theaterMode;
                    // Add visual feedback or implement actual theater mode behavior
                },

                toggleFullscreen() {
                    const container = this.$el;
                    if (!document.fullscreenElement) {
                        container.requestFullscreen();
                    } else {
                        document.exitFullscreen();
                    }
                }
            }
        }
    </script>

    <section class="my-20 space-y-12">
        <div
            class="container bg-gradient-to-r from-second-500 to-zinc-900 rounded-3xl p-12 text-center shadow-2xl border-4 border-zinc-100">
            <img src="{{ asset('assets/images/home_page/logo.png') }}" alt="" class="mx-auto w-full max-w-xs">
            <h2 class="text-white text-56px font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-white text-lg font-bold max-w-2xl mx-auto">Business Process Management (BPM) software that
                can capture the organisational "Value Chain," which is the Business "DNA."</p>
        </div>
    </section>
</div>
