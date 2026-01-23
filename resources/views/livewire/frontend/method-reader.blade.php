<div class="bg-zinc-950">
    @push('styles')
        <link href="https://cdn.jsdelivr.net/npm/@dearhive/dearflip-jquery-flipbook@1.7.3/dflip/css/dflip.min.css"
            rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@dearhive/dearflip-jquery-flipbook@1.7.3/dflip/css/themify-icons.min.css"
            rel="stylesheet">
    @endpush
    <section class="container pt-28 pb-12">
        <div class="flex justify-center items-center scroll-animate-y-reverse">
            <div class="_df_book bg-zinc-950!" source="{{ storage_url($pdf->file) }}"></div>
        </div>
    </section>
</div>
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@dearhive/dearflip-jquery-flipbook@1.7.3/dflip/js/dflip.min.js"></script>
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
            }, {
                threshold: 0.15
            });

            elements.forEach(el => observer.observe(el));
        }

        // First load
        document.addEventListener('DOMContentLoaded', initScrollAnimations);

        // Livewire wire:navigate page change
        document.addEventListener('livewire:navigated', initScrollAnimations);
    </script>
@endpush
