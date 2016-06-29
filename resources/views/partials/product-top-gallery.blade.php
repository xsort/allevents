

<div class="container-fluid">
    <div class="club-head-image">
        <div class="button club-main-prev"><span class="fa fa-angle-left"></span> </div>
        <div class="club-main-gallery">
         	@foreach ($data->photos as $key => $photo)
         	@if ($key == 0) @continue; @endif
            <div class="club-main-photo" style="background:url('uploaded/{{$photo->source}}')"></div>
            @endforeach
        </div>
        <div class="button club-main-next"><span class="fa fa-angle-right"></span></div>
    </div>
</div>
