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


    <section class="container mx-auto my-16 px-6 lg:px-16">

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
                                            <input type="range" class="w-full bg-red" min="0" max="1"
                                                step="0.1" value="1" id="volumeSlider">
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
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg bg-blue-600/20 text-blue text-sm"
                                            data-speed="1">Normal</button>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg hover:bg-white/10 text-sm"
                                            data-speed="1.5">1.5x</button>
                                        <button
                                            class="speed-option w-full text-left px-3 py-2 rounded-lg hover:bg-white/10 text-sm"
                                            data-speed="2">2x</button>
                                    </div>
                                </div>

                                <button class="p-1 text-white transition-colors">
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
                                        class="text-white  transition-colors duration-300 p-1 outline-none">
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

                                <button class="p-1 text-white transition-colors">
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
    </section>

    <section class="pt-20">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($videos as $video)
                    <x-video-player :video="$video" />
                @endforeach
            </div>
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
