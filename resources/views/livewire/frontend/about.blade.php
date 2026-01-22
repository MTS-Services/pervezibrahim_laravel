<div>
    <section
        class="rounded-xl relative bg-white shadow-2xl text-white min-h-[50vh] overflow-hidden container px-6 flex items-center justify-start">
        <!-- Background Pattern Overlay -->
        {{-- <div class="absolute inset-0 opacity-40 pointer-events-none">
            <img src="{{ asset('assets/images/home_page/Union.png') }}" alt="" class="w-full h-full object-none" />
        </div> --}}

        <!-- Hero Content -->
        <main class="releative z-10 w-full mt-20 py-12">
            {{-- <div class="flex justify-center items-center">
                <img src="{{ asset('assets/images/about_page/hero/A person writing on a glass board AI-generated content may be incorrect_.png') }}"
                    alt="" class="w-full h-full max-h-[300px] scroll-animate-x-reverse" />
                <img src="{{ asset('assets/images/about_page/hero/A brick wall with blue neon lights AI-generated content may be incorrect_.png') }}"
                    alt="" class="w-full h-full max-h-[300px] scroll-animate-y-reverse" />
                <img src="{{ asset('assets/images/about_page/hero/A robot with many icons AI-generated content may be incorrect_.jpg') }}"
                    alt="" class="w-full h-full max-h-[300px] scroll-animate-x" />

            </div> --}}
            <div class="flex justify-center items-center">
                <div class="w-full h-full max-h-[300px] overflow-hidden">
                    <img src="{{ asset('assets/images/about_page/hero/image1.png') }}" alt=""
                        class="w-full h-full max-h-[300px] min-h-80 transition-transform duration-300 ease-in hover:scale-105 hover:shadow-2xl scroll-animate-x-reverse" />
                </div>
                <div class="w-full h-full max-h-[300px] overflow-hidden">
                    <img src="{{ asset('assets/images/about_page/hero/image2.png') }}" alt=""
                        class="w-full h-full max-h-[300px] min-h-80 transition-transform duration-300 ease-in hover:scale-105 hover:shadow-2xl scroll-animate-y-reverse" />
                </div>
                <div class="w-full h-full max-h-[300px] overflow-hidden">
                    <img src="{{ asset('assets/images/about_page/hero/image3.png') }}" alt=""
                        class="w-full h-full max-h-[300px] min-h-80 transition-transform duration-300 ease-in hover:scale-105 hover:shadow-2xl scroll-animate-x" />
                </div>
            </div>
            <div class="border-2 border-black/60 p-2 mt-4 text-center rounded-t-sm hover:shadow-2xl duration-300 ease-in hover:border-second-500 scroll-animate-y">
                <p class="text-lg font-bold">We are entering a new era of technology; what we do today may not exist
                    tomorrow!</p>
            </div>
        </main>
    </section>
    <section class="bg-light-blue rounded-xl container p-8 hover:shadow-2xl scroll-animate-y-reverse mt-8">
        <div class="#">
            <!-- Grid Container -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                <div class="scroll-animate-x-reverse">
                    <x-video-player :thumbnail="$aboutVideos->thumbnail_one" :file="$aboutVideos->file_one" />
                </div>
                <div class="scroll-animate-x">
                    <x-video-player :thumbnail="$aboutVideos->thumbnail_two" :file="$aboutVideos->file_two" />
                </div>
            </div>

            <!-- Text Content -->
            <div
                class=" bg-opacity-60 backdrop-blur-sm  p-2 text-center border-2 border-black/60 mt-4 rounded-sm  hover:shadow-2xl duration-300 hover:border-second-500 scroll-animate-y">
                <p class="text-gray-800 text-lg md:text-xl leading-relaxed font-medium">{{ $aboutVideos->description }}
                </p>
            </div>
        </div>
    </section>


    <section class=" rounded-xl container px-1 mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 ">
            <div class="bg-light-blue rounded-2xl relative overflow-hidden gap-2 p-6 hover:shadow-2xl duration-300 scroll-animate-y-reverse">
                <div x-data="videoPlayer()" @play-video.window="pauseOthers($event.detail.id)"
                    @keydown.window.prevent.space="togglePlay" @keydown.window.f="toggleFullscreen"
                    class=" video-container group aspect-video w-full aspect-square relative bg-black rounded-xl overflow-hidden shadow-2xl scroll-animate-x-reverse"
                    :class="{ 'fixed inset-0 z-50': theaterMode }">

                    <video x-ref="video" class="w-full h-full  cursor-pointer"
                        poster="{{ asset('assets/images/about_page/Frame 2147226102.png') }}" @click="togglePlay"
                        @timeupdate="updateProgress" @loadedmetadata="onMetadataLoad" @ended="playing = false">
                        <source src="{{ asset('assets/videos/about-us/1.mp4') }}">
                    </video>

                    {{-- Big Center Play Button --}}
                    <div class="absolute inset-0 flex items-center justify-center bg-black/20 transition-opacity duration-300"
                        x-show="!playing" x-transition.opacity>
                        <button @click="togglePlay"
                            class="w-16 h-16 bg-white/90 rounded-full flex items-center justify-center hover:scale-110 transition-transform shadow-lg">
                            <svg class="w-8 h-8 text-blue-900 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                            </svg>
                        </button>
                    </div>

                    {{-- Bottom Controls --}}
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">

                        {{-- Custom Progress Bar --}}
                        <div class="relative h-1.5 w-full bg-white/30 rounded-full mb-4 cursor-pointer overflow-hidden"
                            @click="seek">
                            <div class="absolute top-0 left-0 h-full bg-red-500 transition-all duration-100"
                                :style="`width: ${progress}%`"></div>
                        </div>

                        <div class="flex items-center justify-between text-white">
                            <div class="flex items-center gap-4">
                                {{-- Play/Pause --}}
                                <button @click="togglePlay" class="hover:text-blue-400 transition-colors">
                                    <template x-if="!playing">
                                        <svg class="w-6 h-6" fill="white" viewBox="0 0 20 20">
                                            <path
                                                d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                        </svg>
                                    </template>
                                    <template x-if="playing">
                                        <svg class="w-6 h-6" fill="white" viewBox="0 0 20 20">
                                            <path
                                                d="M5.75 3a.75.75 0 00-.75.75v12.5c0 .414.336.75.75.75h1.5a.75.75 0 00.75-.75V3.75A.75.75 0 007.25 3h-1.5zM12.75 3a.75.75 0 00-.75.75v12.5c0 .414.336.75.75.75h1.5a.75.75 0 00.75-.75V3.75a.75.75 0 00-.75-.75h-1.5z" />
                                        </svg>
                                    </template>
                                </button>

                                {{-- Time Display --}}
                                <div class="text-xs font-mono text-white">
                                    <span class="text-white" x-text="formatTime(currentTime)"></span> / <span
                                        class="text-white" x-text="formatTime(duration)"></span>
                                </div>

                                {{-- Skip Buttons --}}
                                <button @click="skip(-10)" class="hover:text-blue-400"><svg class="w-5 h-5"
                                        fill="white" viewBox="0 0 20 20">
                                        <path
                                            d="M8.445 14.832A1 1 0 0010 14v-2.798l5.445 3.63A1 1 0 0017 14V6a1 1 0 00-1.555-.832L10 8.798V6a1 1 0 00-1.555-.832l-6 4a1 1 0 000 1.664l6 4z" />
                                    </svg></button>
                                <button @click="skip(10)" class="hover:text-blue-400"><svg class="w-5 h-5"
                                        fill="white" viewBox="0 0 20 20">
                                        <path
                                            d="M4.555 5.168A1 1 0 003 6v8a1 1 0 001.555.832L10 11.202V14a1 1 0 001.555.832l6-4a1 1 0 000-1.664l-6-4A1 1 0 0010 6v2.798l-5.445-3.63z" />
                                    </svg></button>
                            </div>

                            <div class="flex items-center gap-4">
                                {{-- Volume --}}
                                <div class="flex items-center gap-2 group/volume">
                                    <button @click="toggleMute">
                                        <template x-if="muted || volume == 0">
                                            <svg class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM12.293 7.293a1 1 0 011.414 0L15 8.586l1.293-1.293a1 1 0 111.414 1.414L16.414 10l1.293 1.293a1 1 0 01-1.414 1.414L15 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L13.586 10l-1.293-1.293a1 1 0 010-1.414z" />
                                            </svg>
                                        </template>
                                        <template x-if="!muted && volume > 0">
                                            <svg class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 10a5.984 5.984 0 01-1.757 4.243 1 1 0 01-1.415-1.415A3.984 3.984 0 0013 10a3.983 3.983 0 00-1.172-2.828 1 1 0 010-1.415z" />
                                            </svg>
                                        </template>
                                    </button>
                                    <input type="range" min="0" max="1" step="0.1" x-model="volume"
                                        @input="updateVolume" class="w-20 transition-all accent-white outline-none">
                                </div>

                                {{-- Fullscreen --}}
                                <button @click="toggleFullscreen" class="hover:text-blue-400">
                                    <svg class="w-5 h-5" fill="white" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-2 border-black/60 rounded-sm p-2 mt-2 hover:shadow-2xl duration-300 hover:border-second-500 scroll-animate-y">
                    <p class="text-sm"><strong>Peter Drucker once said,</strong> The best way to
                        predict the future is to create it." Inspired
                        by this advice, I passionately developed
                        the ebSixOne™ BPM system, as it is often
                        said that passion never fails. Watch a short
                        video of 2 minutes and 20 seconds.</p>
                </div>
            </div>

            <div class="bg-light-blue rounded-2xl relative overflow-hidden gap-2 p-6 hover:shadow-2xl duration-300 scroll-animate-y-reverse">
                <div x-data="videoPlayer()" @play-video.window="pauseOthers($event.detail.id)"
                    @keydown.window.prevent.space="togglePlay" @keydown.window.f="toggleFullscreen"
                    class=" video-container group aspect-video w-full aspect-square relative bg-black rounded-xl overflow-hidden shadow-2xl scroll-animate-x"
                    :class="{ 'fixed inset-0 z-50': theaterMode }">

                    <video x-ref="video" class="w-full h-full  cursor-pointer"
                        poster="{{ asset('assets/images/about_page/Frame 2147226103.png') }}" @click="togglePlay"
                        @timeupdate="updateProgress" @loadedmetadata="onMetadataLoad" @ended="playing = false">
                        <source src="{{ asset('assets/videos/about-us/delivery_book_2.mp4') }}">
                    </video>

                    {{-- Big Center Play Button --}}
                    <div class="absolute inset-0 flex items-center justify-center bg-black/20 transition-opacity duration-300"
                        x-show="!playing" x-transition.opacity>
                        <button @click="togglePlay"
                            class="w-16 h-16 bg-white/90 rounded-full flex items-center justify-center hover:scale-110 transition-transform shadow-lg">
                            <svg class="w-8 h-8 text-blue-900 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                            </svg>
                        </button>
                    </div>

                    {{-- Bottom Controls --}}
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">

                        {{-- Custom Progress Bar --}}
                        <div class="relative h-1.5 w-full bg-white/30 rounded-full mb-4 cursor-pointer overflow-hidden"
                            @click="seek">
                            <div class="absolute top-0 left-0 h-full bg-red-500 transition-all duration-100"
                                :style="`width: ${progress}%`"></div>
                        </div>

                        <div class="flex items-center justify-between text-white">
                            <div class="flex items-center gap-4">
                                {{-- Play/Pause --}}
                                <button @click="togglePlay" class="hover:text-blue-400 transition-colors">
                                    <template x-if="!playing">
                                        <svg class="w-6 h-6" fill="white" viewBox="0 0 20 20">
                                            <path
                                                d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                        </svg>
                                    </template>
                                    <template x-if="playing">
                                        <svg class="w-6 h-6" fill="white" viewBox="0 0 20 20">
                                            <path
                                                d="M5.75 3a.75.75 0 00-.75.75v12.5c0 .414.336.75.75.75h1.5a.75.75 0 00.75-.75V3.75A.75.75 0 007.25 3h-1.5zM12.75 3a.75.75 0 00-.75.75v12.5c0 .414.336.75.75.75h1.5a.75.75 0 00.75-.75V3.75a.75.75 0 00-.75-.75h-1.5z" />
                                        </svg>
                                    </template>
                                </button>

                                {{-- Time Display --}}
                                <div class="text-xs font-mono text-white">
                                    <span class="text-white" x-text="formatTime(currentTime)"></span> / <span
                                        class="text-white" x-text="formatTime(duration)"></span>
                                </div>

                                {{-- Skip Buttons --}}
                                <button @click="skip(-10)" class="hover:text-blue-400"><svg class="w-5 h-5"
                                        fill="white" viewBox="0 0 20 20">
                                        <path
                                            d="M8.445 14.832A1 1 0 0010 14v-2.798l5.445 3.63A1 1 0 0017 14V6a1 1 0 00-1.555-.832L10 8.798V6a1 1 0 00-1.555-.832l-6 4a1 1 0 000 1.664l6 4z" />
                                    </svg></button>
                                <button @click="skip(10)" class="hover:text-blue-400"><svg class="w-5 h-5"
                                        fill="white" viewBox="0 0 20 20">
                                        <path
                                            d="M4.555 5.168A1 1 0 003 6v8a1 1 0 001.555.832L10 11.202V14a1 1 0 001.555.832l6-4a1 1 0 000-1.664l-6-4A1 1 0 0010 6v2.798l-5.445-3.63z" />
                                    </svg></button>
                            </div>

                            <div class="flex items-center gap-4">
                                {{-- Volume --}}
                                <div class="flex items-center gap-2 group/volume">
                                    <button @click="toggleMute">
                                        <template x-if="muted || volume == 0">
                                            <svg class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM12.293 7.293a1 1 0 011.414 0L15 8.586l1.293-1.293a1 1 0 111.414 1.414L16.414 10l1.293 1.293a1 1 0 01-1.414 1.414L15 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L13.586 10l-1.293-1.293a1 1 0 010-1.414z" />
                                            </svg>
                                        </template>
                                        <template x-if="!muted && volume > 0">
                                            <svg class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 10a5.984 5.984 0 01-1.757 4.243 1 1 0 01-1.415-1.415A3.984 3.984 0 0013 10a3.983 3.983 0 00-1.172-2.828 1 1 0 010-1.415z" />
                                            </svg>
                                        </template>
                                    </button>
                                    <input type="range" min="0" max="1" step="0.1"
                                        x-model="volume" @input="updateVolume"
                                        class="w-20 transition-all accent-white outline-none">
                                </div>

                                {{-- Fullscreen --}}
                                <button @click="toggleFullscreen" class="hover:text-blue-400">
                                    <svg class="w-5 h-5" fill="white" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-2 border-black/60 rounded-sm p-2 mt-2 hover:shadow-2xl duration-300 hover:border-second-500 scroll-animate-y">
                    <p class="text-sm"><strong>My quest for an innovative BPM system. ​</strong>
                        A system that connects your entire supply
                        chain management, ERP system, and
                        robotics, resulting in a comprehensive
                        business process ecosystem. Watch the
                        video; it’s 3 minutes long.</p>
                </div>
            </div>

            <div class="bg-light-blue rounded-2xl relative overflow-hidden gap-2 p-6 hover:shadow-2xl duration-300 scroll-animate-y-reverse">
                <div x-data="videoPlayer()" @play-video.window="pauseOthers($event.detail.id)"
                    @keydown.window.prevent.space="togglePlay" @keydown.window.f="toggleFullscreen"
                    class=" video-container group aspect-video w-full aspect-square relative bg-black rounded-xl overflow-hidden shadow-2xl scroll-animate-x-reverse"
                    :class="{ 'fixed inset-0 z-50': theaterMode }">

                    <video x-ref="video" class="w-full h-full  cursor-pointer"
                        poster="{{ asset('assets/images/about_page/51e5f9472f6f81892b2a00ce0ed14c6b1ee9daa0.png') }}"
                        @click="togglePlay" @timeupdate="updateProgress" @loadedmetadata="onMetadataLoad"
                        @ended="playing = false">
                        <source src="{{ asset('assets/videos/about-us/revised_video_book.mp4') }}">
                    </video>

                    {{-- Big Center Play Button --}}
                    <div class="absolute inset-0 flex items-center justify-center bg-black/20 transition-opacity duration-300"
                        x-show="!playing" x-transition.opacity>
                        <button @click="togglePlay"
                            class="w-16 h-16 bg-white/90 rounded-full flex items-center justify-center hover:scale-110 transition-transform shadow-lg">
                            <svg class="w-8 h-8 text-blue-900 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                            </svg>
                        </button>
                    </div>

                    {{-- Bottom Controls --}}
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">

                        {{-- Custom Progress Bar --}}
                        <div class="relative h-1.5 w-full bg-white/30 rounded-full mb-4 cursor-pointer overflow-hidden"
                            @click="seek">
                            <div class="absolute top-0 left-0 h-full bg-red-500 transition-all duration-100"
                                :style="`width: ${progress}%`"></div>
                        </div>

                        <div class="flex items-center justify-between text-white">
                            <div class="flex items-center gap-4">
                                {{-- Play/Pause --}}
                                <button @click="togglePlay" class="hover:text-blue-400 transition-colors">
                                    <template x-if="!playing">
                                        <svg class="w-6 h-6" fill="white" viewBox="0 0 20 20">
                                            <path
                                                d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                        </svg>
                                    </template>
                                    <template x-if="playing">
                                        <svg class="w-6 h-6" fill="white" viewBox="0 0 20 20">
                                            <path
                                                d="M5.75 3a.75.75 0 00-.75.75v12.5c0 .414.336.75.75.75h1.5a.75.75 0 00.75-.75V3.75A.75.75 0 007.25 3h-1.5zM12.75 3a.75.75 0 00-.75.75v12.5c0 .414.336.75.75.75h1.5a.75.75 0 00.75-.75V3.75a.75.75 0 00-.75-.75h-1.5z" />
                                        </svg>
                                    </template>
                                </button>

                                {{-- Time Display --}}
                                <div class="text-xs font-mono text-white">
                                    <span class="text-white" x-text="formatTime(currentTime)"></span> / <span
                                        class="text-white" x-text="formatTime(duration)"></span>
                                </div>

                                {{-- Skip Buttons --}}
                                <button @click="skip(-10)" class="hover:text-blue-400"><svg class="w-5 h-5"
                                        fill="white" viewBox="0 0 20 20">
                                        <path
                                            d="M8.445 14.832A1 1 0 0010 14v-2.798l5.445 3.63A1 1 0 0017 14V6a1 1 0 00-1.555-.832L10 8.798V6a1 1 0 00-1.555-.832l-6 4a1 1 0 000 1.664l6 4z" />
                                    </svg></button>
                                <button @click="skip(10)" class="hover:text-blue-400"><svg class="w-5 h-5"
                                        fill="white" viewBox="0 0 20 20">
                                        <path
                                            d="M4.555 5.168A1 1 0 003 6v8a1 1 0 001.555.832L10 11.202V14a1 1 0 001.555.832l6-4a1 1 0 000-1.664l-6-4A1 1 0 0010 6v2.798l-5.445-3.63z" />
                                    </svg></button>
                            </div>

                            <div class="flex items-center gap-4">
                                {{-- Volume --}}
                                <div class="flex items-center gap-2 group/volume">
                                    <button @click="toggleMute">
                                        <template x-if="muted || volume == 0">
                                            <svg class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM12.293 7.293a1 1 0 011.414 0L15 8.586l1.293-1.293a1 1 0 111.414 1.414L16.414 10l1.293 1.293a1 1 0 01-1.414 1.414L15 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L13.586 10l-1.293-1.293a1 1 0 010-1.414z" />
                                            </svg>
                                        </template>
                                        <template x-if="!muted && volume > 0">
                                            <svg class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 10a5.984 5.984 0 01-1.757 4.243 1 1 0 01-1.415-1.415A3.984 3.984 0 0013 10a3.983 3.983 0 00-1.172-2.828 1 1 0 010-1.415z" />
                                            </svg>
                                        </template>
                                    </button>
                                    <input type="range" min="0" max="1" step="0.1"
                                        x-model="volume" @input="updateVolume"
                                        class="w-20 transition-all accent-white outline-none">
                                </div>

                                {{-- Fullscreen --}}
                                <button @click="toggleFullscreen" class="hover:text-blue-400">
                                    <svg class="w-5 h-5" fill="white" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-2 border-black/60 rounded-sm p-2 mt-2 hover:shadow-2xl duration-300 hover:border-second-500 scroll-animate-y">
                    <p class="text-sm"><strong>Book 2 – BPM History and Why I created a BPM system watch 3 M
                            -Video</strong></p>
                </div>
            </div>

            <div class="bg-light-blue rounded-2xl relative overflow-hidden gap-2 p-6 hover:shadow-2xl duration-300 scroll-animate-y-reverse">
                <div x-data="videoPlayer()" @play-video.window="pauseOthers($event.detail.id)"
                    @keydown.window.prevent.space="togglePlay" @keydown.window.f="toggleFullscreen"
                    class=" video-container group aspect-video w-full aspect-square relative bg-black rounded-xl overflow-hidden shadow-2xl scroll-animate-x"
                    :class="{ 'fixed inset-0 z-50': theaterMode }">

                    <video x-ref="video" class="w-full h-full  cursor-pointer"
                        poster="{{ asset('assets/images/about_page/image-4 (2).png') }}" @click="togglePlay"
                        @timeupdate="updateProgress" @loadedmetadata="onMetadataLoad" @ended="playing = false">
                        <source src="{{ asset('assets/videos/about-us/crowdfunding_delivery_Uk.mp4') }}">
                    </video>

                    {{-- Big Center Play Button --}}
                    <div class="absolute inset-0 flex items-center justify-center bg-black/20 transition-opacity duration-300"
                        x-show="!playing" x-transition.opacity>
                        <button @click="togglePlay"
                            class="w-16 h-16 bg-white/90 rounded-full flex items-center justify-center hover:scale-110 transition-transform shadow-lg">
                            <svg class="w-8 h-8 text-blue-900 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                            </svg>
                        </button>
                    </div>

                    {{-- Bottom Controls --}}
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">

                        {{-- Custom Progress Bar --}}
                        <div class="relative h-1.5 w-full bg-white/30 rounded-full mb-4 cursor-pointer overflow-hidden"
                            @click="seek">
                            <div class="absolute top-0 left-0 h-full bg-red-500 transition-all duration-100"
                                :style="`width: ${progress}%`"></div>
                        </div>

                        <div class="flex items-center justify-between text-white">
                            <div class="flex items-center gap-4">
                                {{-- Play/Pause --}}
                                <button @click="togglePlay" class="hover:text-blue-400 transition-colors">
                                    <template x-if="!playing">
                                        <svg class="w-6 h-6" fill="white" viewBox="0 0 20 20">
                                            <path
                                                d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                        </svg>
                                    </template>
                                    <template x-if="playing">
                                        <svg class="w-6 h-6" fill="white" viewBox="0 0 20 20">
                                            <path
                                                d="M5.75 3a.75.75 0 00-.75.75v12.5c0 .414.336.75.75.75h1.5a.75.75 0 00.75-.75V3.75A.75.75 0 007.25 3h-1.5zM12.75 3a.75.75 0 00-.75.75v12.5c0 .414.336.75.75.75h1.5a.75.75 0 00.75-.75V3.75a.75.75 0 00-.75-.75h-1.5z" />
                                        </svg>
                                    </template>
                                </button>

                                {{-- Time Display --}}
                                <div class="text-xs font-mono text-white">
                                    <span class="text-white" x-text="formatTime(currentTime)"></span> / <span
                                        class="text-white" x-text="formatTime(duration)"></span>
                                </div>

                                {{-- Skip Buttons --}}
                                <button @click="skip(-10)" class="hover:text-blue-400"><svg class="w-5 h-5"
                                        fill="white" viewBox="0 0 20 20">
                                        <path
                                            d="M8.445 14.832A1 1 0 0010 14v-2.798l5.445 3.63A1 1 0 0017 14V6a1 1 0 00-1.555-.832L10 8.798V6a1 1 0 00-1.555-.832l-6 4a1 1 0 000 1.664l6 4z" />
                                    </svg></button>
                                <button @click="skip(10)" class="hover:text-blue-400"><svg class="w-5 h-5"
                                        fill="white" viewBox="0 0 20 20">
                                        <path
                                            d="M4.555 5.168A1 1 0 003 6v8a1 1 0 001.555.832L10 11.202V14a1 1 0 001.555.832l6-4a1 1 0 000-1.664l-6-4A1 1 0 0010 6v2.798l-5.445-3.63z" />
                                    </svg></button>
                            </div>

                            <div class="flex items-center gap-4">
                                {{-- Volume --}}
                                <div class="flex items-center gap-2 group/volume">
                                    <button @click="toggleMute">
                                        <template x-if="muted || volume == 0">
                                            <svg class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM12.293 7.293a1 1 0 011.414 0L15 8.586l1.293-1.293a1 1 0 111.414 1.414L16.414 10l1.293 1.293a1 1 0 01-1.414 1.414L15 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L13.586 10l-1.293-1.293a1 1 0 010-1.414z" />
                                            </svg>
                                        </template>
                                        <template x-if="!muted && volume > 0">
                                            <svg class="w-5 h-5 fill-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 10a5.984 5.984 0 01-1.757 4.243 1 1 0 01-1.415-1.415A3.984 3.984 0 0013 10a3.983 3.983 0 00-1.172-2.828 1 1 0 010-1.415z" />
                                            </svg>
                                        </template>
                                    </button>
                                    <input type="range" min="0" max="1" step="0.1"
                                        x-model="volume" @input="updateVolume"
                                        class="w-20 transition-all accent-white outline-none">
                                </div>

                                {{-- Fullscreen --}}
                                <button @click="toggleFullscreen" class="hover:text-blue-400">
                                    <svg class="w-5 h-5" fill="white" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-2 border-black/60 rounded-sm p-2 mt-2 hover:shadow-2xl duration-300 hover:border-second-500 scroll-animate-y">
                    <p class="text-sm"><strong>Life is really simple, but we must insist ​ On making it complicated!</strong> </p>
                </div>
            </div>
        </div>
    </section>


    <section class="container py-12">
        <!-- BPM System Section -->
        <div class="bg-light-blue border-teal-400 rounded-3xl mt-4 mb-12 py-6 hover:shadow-2xl duration-300 scroll-animate-y-reverse">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <!-- Left Image -->
                <div class="flex justify-center items-center scroll-animate-x-reverse transition-transform hover:scale-105">
                    <img src="{{ asset('assets/images/about_page/Vector 3.png') }}" alt="">
                </div>

                <!-- Center Content -->
                <div class="text-center">
                    <h2
                        class="text-3xl md:text-4xl font-bold text-second-500 mb-4 leading-tight scroll-animate-y-reverse duration-1200!">
                        Business Process<br />Management (BPM)<br />System
                    </h2>
                    <p class="text-gray-700 text-wrap leading-relaxed scroll-animate-y-reverse">
                        It serves as the heartbeat of every enterprise, tailored to meet your current needs, and
                        designed with nature's principles in mind. A BPM system is designed with nature's principles in
                        mind, supporting your BPM requirements in today's rapidly changing technological landscape.
                    </p>
                </div>

                <!-- Right Image -->
                <div class="flex justify-center items-center scroll-animate-x transition-transform hover:scale-105">
                    <img src="{{ asset('assets/images/about_page/Frame 2147226040.png') }}" alt="">
                </div>
            </div>
        </div>



        <!-- CTA Banner -->
        <div
            class="bg-gradient-to-r from-second-500 to-zinc-900 rounded-3xl p-12 text-center shadow-lg border-4 border-zinc-100 hover:shadow-2xl duration-300 scroll-animate-y-reverse">
            <img src="{{ asset('assets/images/home_page/logo.png') }}" alt=""
                class="mx-auto w-full max-w-xs scroll-animate-y-reverse duration-1500!">
            <h2 class="text-white text-3xl font-bold mb-4 scroll-animate-y-reverse">
                Ready to Get Started?
            </h2>
            <p class="text-zinc-100 text-lg max-w-2xl mx-auto scroll-animate-y-reverse duration-700!">
                Business Process Management (BPM) software that can capture the organisational "Value Chain," which is
                the Business "DNA."
            </p>
            <div class="mt-6 flex justify-center scroll-animate-y-reverse duration-500!">
                <x-ui.button variant="orange-tertiary" class="w-auto! py-2!">
                    {{ __('Get Started') }}
                </x-ui.button>
            </div>
        </div>

    </section>

</div>

@push('scripts')
<script>
    function initScrollAnimations() {
        const elements = document.querySelectorAll(
            '.scroll-animate, .scroll-animate-x, .scroll-animate-x-reverse, .scroll-animate-y, .scroll-animate-y-reverse'
        );

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        elements.forEach(el => observer.observe(el));
    }

    // First load
    document.addEventListener('DOMContentLoaded', initScrollAnimations);

    // Livewire wire:navigate page change
    document.addEventListener('livewire:navigated', initScrollAnimations);
</script>
@endpush

