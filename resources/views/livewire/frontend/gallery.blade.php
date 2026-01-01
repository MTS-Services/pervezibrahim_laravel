<div>
    <style>
        .video-container {
            position: relative;
            background: linear-gradient(135deg, #1e3a8a 0%, #312e81 100%);
            border-radius: 1rem;
            overflow: hidden;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.3);
            transition: opacity 0.3s;
        }

        .video-container:hover .video-overlay {
            opacity: 1;
        }

        .controls {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            padding: 1rem;
            transform: translateY(100%);
            transition: transform 0.3s;
        }

        .video-container:hover .controls {
            transform: translateY(0);
        }

        .progress-bar {
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 2px;
            overflow: hidden;
            cursor: pointer;
        }

        .progress-fill {
            height: 100%;
            background: #ef4444;
            transition: width 0.1s;
        }

        .play-button {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .play-button:hover {
            transform: scale(1.1);
            background: white;
        }

        .control-btn {
            color: white;
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
            transition: all 0.2s;
        }

        .control-btn:hover {
            transform: scale(1.1);
        }
    </style>
    <section class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden container mx-auto">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-80 pointer-events-none">
            <img src="{{ asset('assets/images/home_page/background_images.png') }}" alt=""
                class="w-full h-full object-none" />
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
                    <div x-data="videoPlayer()" class="video-container aspect-video">
                        <video x-ref="video" class="w-full h-full object-cover" @timeupdate="updateProgress"
                            @loadedmetadata="duration = $refs.video.duration">
                            <source src="{{ storage_url($video->file) }}" type="video/mp4">
                        </video>

                        <div class="video-overlay" x-show="!playing" x-transition>
                            <button @click="togglePlay" class="play-button pointer-events-auto">
                                <svg class="w-8 h-8 text-gray-800 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                </svg>
                            </button>
                        </div>

                        <div class="controls">
                            <div class="progress-bar mb-3" @click="seek($event)">
                                <div class="progress-fill" :style="`width: ${progress}%`"></div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <button @click="togglePlay" class="control-btn">
                                        <svg x-show="!playing" class="w-5 h-5 fill-white" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                        </svg>
                                        <svg x-show="playing" class="w-5 h-5 fill-white" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M5.75 3a.75.75 0 00-.75.75v12.5c0 .414.336.75.75.75h1.5a.75.75 0 00.75-.75V3.75A.75.75 0 007.25 3h-1.5zM12.75 3a.75.75 0 00-.75.75v12.5c0 .414.336.75.75.75h1.5a.75.75 0 00.75-.75V3.75a.75.75 0 00-.75-.75h-1.5z" />
                                        </svg>
                                    </button>
                                    <button @click="skipBackward" class="control-btn">
                                        <svg class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M8.445 14.832A1 1 0 0010 14v-2.798l5.445 3.63A1 1 0 0017 14V6a1 1 0 00-1.555-.832L10 8.798V6a1 1 0 00-1.555-.832l-6 4a1 1 0 000 1.664l6 4z" />
                                        </svg>
                                    </button>
                                    <button @click="skipForward" class="control-btn">
                                        <svg class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M4.555 5.168A1 1 0 003 6v8a1 1 0 001.555.832L10 11.202V14a1 1 0 001.555.832l6-4a1 1 0 000-1.664l-6-4A1 1 0 0010 6v2.798l-5.445-3.63z" />
                                        </svg>
                                    </button>
                                    <button @click="toggleMute" class="control-btn">
                                        <svg x-show="!muted" class="w-5 h-5 fill-white" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM12.293 7.293a1 1 0 011.414 0L15 8.586l1.293-1.293a1 1 0 111.414 1.414L16.414 10l1.293 1.293a1 1 0 01-1.414 1.414L15 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L13.586 10l-1.293-1.293a1 1 0 010-1.414z" />
                                        </svg>
                                        <svg x-show="muted" class="w-5 h-5 fill-white" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 10a5.984 5.984 0 01-1.757 4.243 1 1 0 01-1.415-1.415A3.984 3.984 0 0013 10a3.983 3.983 0 00-1.172-2.828 1 1 0 010-1.415z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button class="control-btn">
                                        <svg class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <button class="control-btn">
                                        <svg class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <button @click="toggleFullscreen" class="control-btn">
                                        <svg class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            @if ($videos->isEmpty())
                <p class="text-center text-second-500 text-xl font-bold">No videos available at the moment.</p>
            @endif
        </div>
    </section>

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
