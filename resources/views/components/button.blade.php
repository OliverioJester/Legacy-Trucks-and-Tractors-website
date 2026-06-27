<button {{ $attributes->merge(['class' => 'text-white bg-[#47579c] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#2d366b] transition cursor-pointer']) }}>
    {{ $slot }}
</button>