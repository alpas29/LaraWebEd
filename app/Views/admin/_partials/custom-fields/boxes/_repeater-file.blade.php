<div class="scf-image-wrap">
    <div class="select-media-box">
        <a title="" class="btn blue show-add-media-popup">Choose file</a>
        <div class="clearfix"></div>
        <a title="" class="show-add-media-popup">
            <img src="{{ '/admin/images/no-image.png' }}" alt="" class="img-responsive">
            <span class="title">{{ $theMeta or '' }}</span>
        </a>
        <input type="hidden" data-slug="{{ $fieldItem->slug or '' }}" data-fieldtype="{{ $fieldItem->field_type_updated or '' }}" value="{{ $theMeta or '' }}" class="input-file">
        <a href="#" title="" class="remove-image"><span>&nbsp;</span></a>
    </div>
</div>