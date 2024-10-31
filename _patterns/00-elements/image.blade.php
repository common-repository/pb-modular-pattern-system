{{--
  ELEMENT: IMAGE
  Version: 1.2
--}}


<div {{$pbmps_element_wrapper}}>
    <figure class="{{$pbmps_element_template}}__{{$id}}--{{$type}} {{$pbmps_element_classes}}" {{$pbmps_element_id}} {{$pbmps_element_title}} {{$pbmps_element_attribute}} {{$pbmps_element_type}}>
        <img <?php echo $pbmps_element_src; ?> <?php echo $pbmps_element_width; ?> <?php echo $pbmps_element_height; ?> <?php echo $pbmps_element_alt; ?> />
        @if( $pbmps_element_caption != '' )
            <figcaption> {{$pbmps_element_caption}} </figcaption>
        @endif
    </figure>
</div>
