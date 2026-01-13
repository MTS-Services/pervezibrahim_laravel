@props(['video', 'thumbnail', 'file'])

<div x-data="videoPlayer()" 
     @play-video.window="pauseOthers($event.detail.id)"
     @keydown.window.prevent.space="togglePlay"
     @keydown.window.f="toggleFullscreen"
     class="video-container group aspect-video relative bg-black rounded-xl overflow-hidden shadow-2xl"
     :class="{ 'fixed inset-0 z-50': theaterMode }">

    <video x-ref="video" 
           class="w-full h-full cursor-pointer" 
           poster="{{ $thumbnail ? Storage::url($thumbnail) : '' }}"
           @click="togglePlay"
           @timeupdate="updateProgress" 
           @loadedmetadata="onMetadataLoad"
           @ended="playing = false">
        <source src="{{ $file ? Storage::url($file) : '' }}" type="video/mp4">
    </video>

    {{-- Big Center Play Button --}}
    <div class="absolute inset-0 flex items-center justify-center bg-black/20 transition-opacity duration-300"
         x-show="!playing" x-transition.opacity>
        <button @click="togglePlay" class="w-16 h-16 bg-white/90 rounded-full flex items-center justify-center hover:scale-110 transition-transform shadow-lg">
            <svg class="w-8 h-8 text-blue-900 ml-1" fill="currentColor" viewBox="0 0 20 20"><path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" /></svg>
        </button>
    </div>

    {{-- Bottom Controls --}}
    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
        
        {{-- Custom Progress Bar --}}
        <div class="relative h-1.5 w-full bg-white/30 rounded-full mb-4 cursor-pointer overflow-hidden" @click="seek">
            <div class="absolute top-0 left-0 h-full bg-blue-500 transition-all duration-100" :style="`width: ${progress}%`"></div>
        </div>

        <div class="flex items-center justify-between text-white">
            <div class="flex items-center gap-4">
                {{-- Play/Pause --}}
                <button @click="togglePlay" class="hover:text-blue-400 transition-colors">
                    <template x-if="!playing">
                        <svg class="w-6 h-6" fill="white" viewBox="0 0 20 20"><path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" /></svg>
                    </template>
                    <template x-if="playing">
                        <svg class="w-6 h-6" fill="white" viewBox="0 0 20 20"><path d="M5.75 3a.75.75 0 00-.75.75v12.5c0 .414.336.75.75.75h1.5a.75.75 0 00.75-.75V3.75A.75.75 0 007.25 3h-1.5zM12.75 3a.75.75 0 00-.75.75v12.5c0 .414.336.75.75.75h1.5a.75.75 0 00.75-.75V3.75a.75.75 0 00-.75-.75h-1.5z" /></svg>
                    </template>
                </button>

                {{-- Time Display --}}
                <div class="text-xs font-mono text-white">
                    <span class="text-white" x-text="formatTime(currentTime)"></span> / <span class="text-white" x-text="formatTime(duration)"></span>
                </div>

                {{-- Skip Buttons --}}
                <button @click="skip(-10)" class="hover:text-blue-400"><svg class="w-5 h-5" fill="white" viewBox="0 0 20 20"><path d="M8.445 14.832A1 1 0 0010 14v-2.798l5.445 3.63A1 1 0 0017 14V6a1 1 0 00-1.555-.832L10 8.798V6a1 1 0 00-1.555-.832l-6 4a1 1 0 000 1.664l6 4z" /></svg></button>
                <button @click="skip(10)" class="hover:text-blue-400"><svg class="w-5 h-5" fill="white" viewBox="0 0 20 20"><path d="M4.555 5.168A1 1 0 003 6v8a1 1 0 001.555.832L10 11.202V14a1 1 0 001.555.832l6-4a1 1 0 000-1.664l-6-4A1 1 0 0010 6v2.798l-5.445-3.63z" /></svg></button>
            </div>

            <div class="flex items-center gap-4">
                {{-- Volume --}}
                <div class="flex items-center gap-2 group/volume">
                    <button @click="toggleMute">
                        <template x-if="muted || volume == 0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728L5.636 5.636" /></svg>
                        </template>
                        <template x-if="!muted && volume > 0">
                            <svg class="w-5 h-5" fill="white" viewBox="0 0 20 20"><path d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414z" /></svg>
                        </template>
                    </button>
                    <input type="range" min="0" max="1" step="0.1" x-model="volume" @input="updateVolume" class="w-0 group-hover/volume:w-20 transition-all accent-white outline-none">
                </div>

                {{-- Fullscreen --}}
                <button @click="toggleFullscreen" class="hover:text-blue-400">
                    <svg class="w-5 h-5" fill="white" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z" clip-rule="evenodd" /></svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function videoPlayer() {
    return {
        id: Math.random().toString(36).substr(2, 9),
        playing: false,
        muted: false,
        volume: 1,
        progress: 0,
        currentTime: 0,
        duration: 0,
        theaterMode: false,

        togglePlay() {
            if (this.$refs.video.paused) {
                this.$refs.video.play();
                this.playing = true;
                // Dispatch event to pause other players
                this.$dispatch('play-video', { id: this.id });
            } else {
                this.$refs.video.pause();
                this.playing = false;
            }
        },

        pauseOthers(playingId) {
            if (this.id !== playingId) {
                this.$refs.video.pause();
                this.playing = false;
            }
        },

        onMetadataLoad() {
            this.duration = this.$refs.video.duration;
        },

        updateProgress() {
            this.currentTime = this.$refs.video.currentTime;
            this.progress = (this.currentTime / this.duration) * 100;
        },

        seek(e) {
            const rect = e.currentTarget.getBoundingClientRect();
            const pos = (e.clientX - rect.left) / rect.width;
            this.$refs.video.currentTime = pos * this.duration;
        },

        skip(seconds) {
            this.$refs.video.currentTime += seconds;
        },

        updateVolume() {
            this.$refs.video.volume = this.volume;
            this.muted = this.volume === 0;
        },

        toggleMute() {
            this.muted = !this.muted;
            this.$refs.video.muted = this.muted;
            if (!this.muted && this.volume === 0) this.volume = 0.5;
        },

        formatTime(seconds) {
            if (!seconds) return '00:00';
            const min = Math.floor(seconds / 60);
            const sec = Math.floor(seconds % 60);
            return `${min.toString().padStart(2, '0')}:${sec.toString().padStart(2, '0')}`;
        },

        toggleFullscreen() {
            if (!document.fullscreenElement) {
                this.$el.requestFullscreen();
            } else {
                document.exitFullscreen();
            }
        }
    }
}
</script>