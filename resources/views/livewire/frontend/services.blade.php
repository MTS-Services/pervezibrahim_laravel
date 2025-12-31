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
                    ebSixOne Systems <br>
                    design!
                </h1>
            </div>
        </main>
    </section>


    {{-- <section class="container mx-auto my-16 px-6 lg:px-16">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="flex items-center justify-center ">

                <div
                    class="relative group w-full max-w-2xl rounded-2xl overflow-hidden shadow-2xl aspect-video bg-black">


                    <div class="relative w-full h-full">

                        <!-- VIDEO -->
                        <video id="videoPlayer" class="w-full h-full object-cover">
                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <!-- CENTER PLAY ICON -->
                        <button id="centerPlayBtn" class="absolute inset-0 flex items-center justify-center transition">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-20 h-20 text-white fill-white hover:scale-110 transition-transform"
                                viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"></path>
                            </svg>
                        </button>
                    </div>

                    <div id="controls"
                        class="absolute inset-0 from-black/70 via-transparent to-transparent flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">

                        <div class="w-full h-1.5 bg-white/20 rounded-full mb-4 cursor-pointer overflow-hidden relative"
                            id="progressContainer">
                            <div id="progressBar"
                                class="absolute top-0 left-0 h-full bg-red w-0 transition-all duration-100"></div>
                        </div>

                        <div class="flex items-center justify-between">

                            <div class="flex items-center gap-6">
                                <button id="playBtn" class="text-white transition-all">
                                    <svg id="playIcon" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-white"
                                        viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"></path>
                                    </svg>
                                    <svg id="pauseIcon" xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8 fill-white hidden" viewBox="0 0 24 24">
                                        <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"></path>
                                    </svg>
                                </button>

                                <div class="flex items-center gap-4">
                                    <button id="nextBtn"
                                        class="text-white transition-colors duration-300 p-1 outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 fill-white"
                                            viewBox="0 0 24 24">
                                            <path d="M6 18l8.5-6L6 6v12zM16 6v12h2V6h-2z" />
                                        </svg>
                                    </button>
                                    <div class="flex items-center gap-2 group/vol">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
                                            fill="none" viewBox="0 0 24 24" stroke="white">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                                        </svg>
                                        <div
                                            class="w-0 group-hover/vol:w-20 overflow-hidden transition-all duration-300">
                                            <input type="range" class="w-full bg-red" min="0" max="1"
                                                step="0.1" value="1" id="volumeSlider">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-6">
                                <div class="relative group/settings">
                                    <button id="settingsBtn"
                                        class="text-white  hover:rotate-90 transition-all duration-500 p-1 outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6 fill-white stroke-current" viewBox="0 0 24 24"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path
                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                            </path>
                                        </svg>
                                    </button>

                                    <div id="settingsMenu"
                                        class="absolute bottom-full right-0 mb-4 w-48 bg-zinc-900/95 backdrop-blur-md border border-white/10 rounded-xl p-2 hidden shadow-xl text-white">
                                        <div
                                            class="text-[10px] uppercase tracking-widest text-zinc-500 font-bold px-3 py-1">
                                            Playback Speed</div>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg hover:bg-white/10 text-sm"
                                            data-speed="0.5">0.5x</button>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg bg-blue-600/20 text-blue-400 text-sm"
                                            data-speed="1">Normal</button>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg hover:bg-white/10 text-sm"
                                            data-speed="1.5">1.5x</button>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg hover:bg-white/10 text-sm"
                                            data-speed="2">2x</button>
                                    </div>
                                </div>

                                <button class="p-1 text-white  transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        stroke="white" stroke-width="2" viewBox="0 0 24 24">
                                        <rect x="3" y="7" width="18" height="10" rx="2" />
                                    </svg>
                                </button>


                                <button id="fullscreenBtn" class=" ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="white" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center ">
                <div
                    class="relative group w-full max-w-2xl rounded-2xl overflow-hidden shadow-2xl aspect-video bg-black">
                    <div class="relative w-full h-full">
                        <!-- VIDEO -->
                        <video id="videoPlayer" class="w-full h-full object-cover">
                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <!-- CENTER PLAY ICON -->
                        <button id="centerPlayBtn"
                            class="absolute inset-0 flex items-center justify-center transition">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-20 h-20 text-white fill-white hover:scale-110 transition-transform"
                                viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"></path>
                            </svg>
                        </button>

                    </div>


                    <div id="controls"
                        class="absolute inset-0 from-black/70 via-transparent to-transparent flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">

                        <div class="w-full h-1.5 bg-white/20 rounded-full mb-4 cursor-pointer overflow-hidden relative"
                            id="progressContainer">
                            <div id="progressBar"
                                class="absolute top-0 left-0 h-full bg-red w-0 transition-all duration-100"></div>
                        </div>

                        <div class="flex items-center justify-between">

                            <div class="flex items-center gap-6">
                                <button id="playBtn" class="text-white hover:scale-110 transition-all">
                                    <svg id="playIcon" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-white"
                                        viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"></path>
                                    </svg>
                                    <svg id="pauseIcon" xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8 fill-white hidden" viewBox="0 0 24 24">
                                        <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"></path>
                                    </svg>
                                </button>

                                <div class="flex items-center gap-4">
                                    <button id="nextBtn"
                                        class="text-white hover:text-gray-200 transition-colors duration-300 p-1 outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 fill-white"
                                            viewBox="0 0 24 24">
                                            <path d="M6 18l8.5-6L6 6v12zM16 6v12h2V6h-2z" />
                                        </svg>
                                    </button>
                                    <div class="flex items-center gap-2 group/vol">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
                                            fill="none" viewBox="0 0 24 24" stroke="white">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                                        </svg>
                                        <div
                                            class="w-0 group-hover/vol:w-20 overflow-hidden transition-all duration-300">
                                            <input type="range" class="w-full red-500" min="0"
                                                max="1" step="0.1" value="1" id="volumeSlider">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-6">
                                <div class="relative group/settings">
                                    <button id="settingsBtn"
                                        class="text-white hover:text-gray-200 hover:rotate-90 transition-all duration-500 p-1 outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6 fill-white stroke-current" viewBox="0 0 24 24"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path
                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                            </path>
                                        </svg>
                                    </button>

                                    <div id="settingsMenu"
                                        class="absolute bottom-full right-0 mb-4 w-48 bg-zinc-900/95 backdrop-blur-md border border-white/10 rounded-xl p-2 hidden shadow-xl text-white">
                                        <div
                                            class="text-[10px] uppercase tracking-widest text-zinc-500 font-bold px-3 py-1">
                                            Playback Speed</div>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg hover:bg-white/10 text-sm"
                                            data-speed="0.5">0.5x</button>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg bg-blue-600/20  text-sm"
                                            data-speed="1">Normal</button>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg hover:bg-white/10 text-sm"
                                            data-speed="1.5">1.5x</button>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg hover:bg-white/10 text-sm"
                                            data-speed="2">2x</button>
                                    </div>
                                </div>

                                <button class="p-1 text-white  transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        stroke="white" stroke-width="2" viewBox="0 0 24 24">
                                        <rect x="3" y="7" width="18" height="10" rx="2" />
                                    </svg>
                                </button>


                                <button id="fullscreenBtn" class="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="white" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center ">
                <div
                    class="relative group w-full max-w-2xl rounded-2xl overflow-hidden shadow-2xl aspect-video bg-black">
                    <div class="relative w-full h-full">
                        <!-- VIDEO -->
                        <video id="videoPlayer" class="w-full h-full object-cover">
                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <!-- CENTER PLAY ICON -->
                        <button id="centerPlayBtn"
                            class="absolute inset-0 flex items-center justify-center transition">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-20 h-20 text-white fill-white hover:scale-110 transition-transform"
                                viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"></path>
                            </svg>
                        </button>
                    </div>
                    <div id="controls"
                        class="absolute inset-0 from-black/70 via-transparent to-transparent flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">

                        <div class="w-full h-1.5 bg-white/20 rounded-full mb-4 cursor-pointer overflow-hidden relative"
                            id="progressContainer">
                            <div id="progressBar"
                                class="absolute top-0 left-0 h-full bg-red w-0 transition-all duration-100"></div>
                        </div>

                        <div class="flex items-center justify-between">

                            <div class="flex items-center gap-6">
                                <button id="playBtn" class="text-white  hover:scale-110 transition-all">
                                    <svg id="playIcon" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-white"
                                        viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"></path>
                                    </svg>
                                    <svg id="pauseIcon" xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8 fill-white hidden" viewBox="0 0 24 24">
                                        <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"></path>
                                    </svg>
                                </button>

                                <div class="flex items-center gap-4">
                                    <button id="nextBtn"
                                        class="text-white hover:text-gray-200 transition-colors duration-300 p-1 outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 fill-white"
                                            viewBox="0 0 24 24">
                                            <path d="M6 18l8.5-6L6 6v12zM16 6v12h2V6h-2z" />
                                        </svg>
                                    </button>
                                    <div class="flex items-center gap-2 group/vol">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
                                            fill="none" viewBox="0 0 24 24" stroke="white">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                                        </svg>
                                        <div
                                            class="w-0 group-hover/vol:w-20 overflow-hidden transition-all duration-300">
                                            <input type="range" class="w-full bg-red" min="0"
                                                max="1" step="0.1" value="1" id="volumeSlider">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-6">
                                <div class="relative group/settings">
                                    <button id="settingsBtn"
                                        class="text-white hover:text-gray-200 hover:rotate-90 transition-all duration-500 p-1 outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6 fill-white stroke-current" viewBox="0 0 24 24"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path
                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                            </path>
                                        </svg>
                                    </button>

                                    <div id="settingsMenu"
                                        class="absolute bottom-full right-0 mb-4 w-48 bg-zinc-900/95 backdrop-blur-md border border-white/10 rounded-xl p-2 hidden shadow-xl text-white">
                                        <div
                                            class="text-[10px] uppercase tracking-widest text-zinc-500 font-bold px-3 py-1">
                                            Playback Speed</div>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg hover:bg-white/10 text-sm"
                                            data-speed="0.5">0.5x</button>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg bg-blue-600/20  text-sm"
                                            data-speed="1">Normal</button>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg hover:bg-white/10 text-sm"
                                            data-speed="1.5">1.5x</button>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg hover:bg-white/10 text-sm"
                                            data-speed="2">2x</button>
                                    </div>
                                </div>

                                <button class="p-1 text-white  transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        stroke="white" stroke-width="2" viewBox="0 0 24 24">
                                        <rect x="3" y="7" width="18" height="10" rx="2" />
                                    </svg>
                                </button>


                                <button id="fullscreenBtn" class=" ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="white" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="flex items-center justify-center ">
                <div
                    class="relative group w-full max-w-2xl rounded-2xl overflow-hidden shadow-2xl aspect-video bg-black">
                    <div class="relative w-full h-full">
                        <!-- VIDEO -->
                        <video id="videoPlayer" class="w-full h-full object-cover">
                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <!-- CENTER PLAY ICON -->
                        <button id="centerPlayBtn"
                            class="absolute inset-0 flex items-center justify-center transition">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-20 h-20 text-white fill-white hover:scale-110 transition-transform"
                                viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"></path>
                            </svg>
                        </button>
                    </div>
                    <div id="controls"
                        class="absolute inset-0 from-black/70 via-transparent to-transparent flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">

                        <div class="w-full h-1.5 bg-white/20 rounded-full mb-4 cursor-pointer overflow-hidden relative"
                            id="progressContainer">
                            <div id="progressBar"
                                class="absolute top-0 left-0 h-full bg-red w-0 transition-all duration-100"></div>
                        </div>

                        <div class="flex items-center justify-between">

                            <div class="flex items-center gap-6">
                                <button id="playBtn" class="text-white  hover:scale-110 transition-all">
                                    <svg id="playIcon" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-white"
                                        viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"></path>
                                    </svg>
                                    <svg id="pauseIcon" xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8 fill-white hidden" viewBox="0 0 24 24">
                                        <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"></path>
                                    </svg>
                                </button>

                                <div class="flex items-center gap-4">
                                    <button id="nextBtn"
                                        class="text-white hover:text-gray-200 transition-colors duration-300 p-1 outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 fill-white"
                                            viewBox="0 0 24 24">
                                            <path d="M6 18l8.5-6L6 6v12zM16 6v12h2V6h-2z" />
                                        </svg>
                                    </button>
                                    <div class="flex items-center gap-2 group/vol">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
                                            fill="none" viewBox="0 0 24 24" stroke="white">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                                        </svg>
                                        <div
                                            class="w-0 group-hover/vol:w-20 overflow-hidden transition-all duration-300">
                                            <input type="range" class="w-full bg-red" min="0"
                                                max="1" step="0.1" value="1" id="volumeSlider">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-6">
                                <div class="relative group/settings">
                                    <button id="settingsBtn"
                                        class="text-white hover:text-gray-200 hover:rotate-90 transition-all duration-500 p-1 outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6 fill-white stroke-current" viewBox="0 0 24 24"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path
                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                            </path>
                                        </svg>
                                    </button>

                                    <div id="settingsMenu"
                                        class="absolute bottom-full right-0 mb-4 w-48 bg-zinc-900/95 backdrop-blur-md border border-white/10 rounded-xl p-2 hidden shadow-xl text-white">
                                        <div
                                            class="text-[10px] uppercase tracking-widest text-zinc-500 font-bold px-3 py-1">
                                            Playback Speed</div>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg hover:bg-white/10 text-sm"
                                            data-speed="0.5">0.5x</button>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg bg-blue-600/20  text-sm"
                                            data-speed="1">Normal</button>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg hover:bg-white/10 text-sm"
                                            data-speed="1.5">1.5x</button>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg hover:bg-white/10 text-sm"
                                            data-speed="2">2x</button>
                                    </div>
                                </div>

                                <button class="p-1 text-white  transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        stroke="white" stroke-width="2" viewBox="0 0 24 24">
                                        <rect x="3" y="7" width="18" height="10" rx="2" />
                                    </svg>
                                </button>


                                <button id="fullscreenBtn" class=" ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="white" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                const video = document.getElementById('videoPlayer');
                const centerBtn = document.getElementById('centerPlayBtn');
                const playBtn = document.getElementById('playBtn');
                const playIcon = document.getElementById('playIcon');
                const pauseIcon = document.getElementById('pauseIcon');
                const progressBar = document.getElementById('progressBar');
                const progressContainer = document.getElementById('progressContainer');
                const volumeSlider = document.getElementById('volumeSlider');
                const fullscreenBtn = document.getElementById('fullscreenBtn');
                const nextBtn = document.getElementById('nextBtn');
                const settingsBtn = document.getElementById('settingsBtn');
                const settingsMenu = document.getElementById('settingsMenu');
                const speedOptions = document.querySelectorAll('.speed-option');

                // Play/Pause
                playBtn.addEventListener('click', () => {
                    if (video.paused) {
                        video.play();
                        playIcon.classList.add('hidden');
                        pauseIcon.classList.remove('hidden');
                    } else {
                        video.pause();
                        playIcon.classList.remove('hidden');
                        pauseIcon.classList.add('hidden');
                    }
                });
                video.addEventListener('pause', () => {
                    centerBtn.classList.remove('hidden');
                });

                // Progress
                video.addEventListener('timeupdate', () => {
                    const percent = (video.currentTime / video.duration) * 100;
                    progressBar.style.width = `${percent}%`;
                });

                // Seek
                progressContainer.addEventListener('click', (e) => {
                    const rect = progressContainer.getBoundingClientRect();
                    const pos = (e.clientX - rect.left) / rect.width;
                    video.currentTime = pos * video.duration;
                });

                // Volume
                volumeSlider.addEventListener('input', (e) => {
                    video.volume = e.target.value;
                });

                // Fullscreen
                fullscreenBtn.addEventListener('click', () => {
                    if (video.requestFullscreen) video.requestFullscreen();
                    else if (video.webkitRequestFullscreen) video.webkitRequestFullscreen();
                });

                // Skip forward
                nextBtn.addEventListener('click', () => {
                    video.currentTime += 10;
                });

                // Settings Toggle
                settingsBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    settingsMenu.classList.toggle('hidden');
                });

                document.addEventListener('click', () => settingsMenu.classList.add('hidden'));

                speedOptions.forEach(option => {
                    option.addEventListener('click', () => {
                        const speed = option.getAttribute('data-speed');
                        video.playbackRate = speed;
                        speedOptions.forEach(opt => opt.classList.remove('bg-blue-600/20', 'text-blue-400'));
                        option.classList.add('bg-blue-600/20', 'text-blue-400');
                    });
                });
            </script>
        </div>
    </section> --}}
    <section class="pt-20">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Video 1: Creative IDEA -->
                <div x-data="videoPlayer()" class="video-container aspect-video">
                    <video x-ref="video" class="w-full h-full object-cover" @timeupdate="updateProgress"
                        @loadedmetadata="duration = $refs.video.duration">
                        <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                            type="video/mp4">
                    </video>

                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <div class="flex items-center gap-4">
                            <div class="flex items-center">
                                <svg class="w-16 h-16 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-white">
                                <div class="text-4xl font-bold tracking-wider">
                                    <span class="text-cyan-400">CREATIVE</span>
                                </div>
                                <div class="text-5xl font-bold tracking-wider text-pink-400">IDEA</div>
                            </div>
                        </div>
                    </div>

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
                                    <svg x-show="!playing" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                    </svg>
                                    <svg x-show="playing" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
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
                                    <svg x-show="!muted" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM12.293 7.293a1 1 0 011.414 0L15 8.586l1.293-1.293a1 1 0 111.414 1.414L16.414 10l1.293 1.293a1 1 0 01-1.414 1.414L15 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L13.586 10l-1.293-1.293a1 1 0 010-1.414z" />
                                    </svg>
                                    <svg x-show="muted" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
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

                <!-- Video 2: ebSixOne -->
                <div x-data="videoPlayer()" class="video-container aspect-video">
                    <video x-ref="video" class="w-full h-full object-cover" @timeupdate="updateProgress"
                        @loadedmetadata="duration = $refs.video.duration">
                        <source
                            src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                            type="video/mp4">
                    </video>

                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <div class="text-white text-5xl font-bold tracking-wider">
                            ebSixOne™
                        </div>
                    </div>

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
                                    <svg x-show="!playing" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                    </svg>
                                    <svg x-show="playing" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
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
                                    <svg x-show="!muted" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM12.293 7.293a1 1 0 011.414 0L15 8.586l1.293-1.293a1 1 0 111.414 1.414L16.414 10l1.293 1.293a1 1 0 01-1.414 1.414L15 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L13.586 10l-1.293-1.293a1 1 0 010-1.414z" />
                                    </svg>
                                    <svg x-show="muted" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
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

                <!-- Video 3: Life Quote -->
                <div x-data="videoPlayer()" class="video-container aspect-video">
                    <video x-ref="video" class="w-full h-full object-cover" @timeupdate="updateProgress"
                        @loadedmetadata="duration = $refs.video.duration">
                        <source
                            src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                            type="video/mp4">
                    </video>

                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <div class="text-white text-center px-8">
                            <div class="text-2xl font-bold mb-4 leading-relaxed">
                                LIFE IS REALLY<br>
                                SIMPLE, BUT WE<br>
                                INSIST ON<br>
                                MAKING IT<br>
                                COMPLICATED
                            </div>
                            <div class="text-sm italic">-Confucius</div>
                            <div class="text-xs mt-8 opacity-70">
                                It's a nice place of Realization 365dy,<br>
                                but it's not a nice place for you
                            </div>
                        </div>
                    </div>

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
                                    <svg x-show="!playing" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                    </svg>
                                    <svg x-show="playing" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
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
                                    <svg x-show="!muted" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM12.293 7.293a1 1 0 011.414 0L15 8.586l1.293-1.293a1 1 0 111.414 1.414L16.414 10l1.293 1.293a1 1 0 01-1.414 1.414L15 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L13.586 10l-1.293-1.293a1 1 0 010-1.414z" />
                                    </svg>
                                    <svg x-show="muted" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
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

                <!-- Video 4: BPM -->
                <div x-data="videoPlayer()" class="video-container aspect-video">
                    <video x-ref="video" class="w-full h-full object-cover" @timeupdate="updateProgress"
                        @loadedmetadata="duration = $refs.video.duration">
                        <source
                            src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4"
                            type="video/mp4">
                    </video>

                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <div class="text-white text-center">
                            <div class="text-5xl font-bold mb-2">BPM</div>
                            <div class="text-xl">Business Process Management</div>
                            <div class="text-3xl font-bold mt-8">ebSixOne™</div>
                        </div>
                    </div>

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
                                    <svg x-show="!playing" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                    </svg>
                                    <svg x-show="playing" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
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
                                    <svg x-show="!muted" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM12.293 7.293a1 1 0 011.414 0L15 8.586l1.293-1.293a1 1 0 111.414 1.414L16.414 10l1.293 1.293a1 1 0 01-1.414 1.414L15 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L13.586 10l-1.293-1.293a1 1 0 010-1.414z" />
                                    </svg>
                                    <svg x-show="muted" class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
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

            </div>
        </div>
    </section>

    <script>
        function videoPlayer() {
            return {
                playing: false,
                muted: false,
                progress: 0,
                duration: 0,

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
            <img src="{{ asset('assets/images/home_page/logo.png') }}" alt=""
                class="mx-auto w-full max-w-xs">
            <h2 class="text-white text-56px font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-white text-lg font-bold max-w-2xl mx-auto">Business Process Management (BPM) software that
                can capture the organisational "Value Chain," which is the Business "DNA."</p>
        </div>
    </section>
</div>
