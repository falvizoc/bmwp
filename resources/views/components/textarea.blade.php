
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    @if ($label)
        <label for="{{ $id }}">{{ $label }}</label>
    @endif
    <textarea name="{{ $name }}" class="form-control form-control-sm" id="{{ $id }}" rows="{{ $rows }}" placeholder="{{ $placeholder }}"></textarea>
    @if ($help)
        <small class="form-text text-muted" id="{{ $name }}_help">{{ $help }}</small>
    @endif

