
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    @if ($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <input name ="{{ $name }}" type="{{ $type }}" class="form-control form-control-sm" id="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}">
    @if ($help)
        <small class="form-text text-muted" id="{{ $name }}_help">{{ $help }}</small>
    @endif

