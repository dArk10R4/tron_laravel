@php
$content = content('roadmap.content');
[$elements] = element('roadmap.element')->chunk(3);


@endphp
    <section id="why-choose" class="choose-section s-pt-100 s-pb-100">
    <div class="choose-el">
        <img src="{{ getFile('bg','choose-el.png') }}" alt="image">
    </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="sp_site_header  text-center" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h2 class="sp_site_title">{{ __(@$content->data->title) }}</h2>
                    </div>
                </div>
            </div>
            <div class="choose-wrapper">
                <div class="choose-wrapper-thumb">
                    <div class="thumb-inner">
                        <i class="fab fa-btc"></i>
                    </div>
                    <div class="left-1"></div>
                    <div class="left-2"></div>
                    <div class="right-1"></div>
                    <div class="right-2"></div>
                </div>
                <div class="choose-wrapper-inner">
                    @foreach ($elements as $key => $element)
                        @if ($key%2==0)
                        <div class="col-xl-4 col-md-6 wow fadeInLeft border-bottom-0" data-wow-duration="0.5s" data-wow-delay="0.7s">
                            <div class="choose-item wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.5s">
                                <div class="icon">
                                    
                                </div>
                                <div class="content">
                                    <h4 class="title">{{__(@$element->data->card_title)}}</h4>
                                    <p class="mt-2"> <?php
                                        echo clean(@$element->data->card_description);
                                        ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 wow fadeInLeft border-0 d-none p-0 d-md-block" data-wow-duration="0.5s" data-wow-delay="0.7s">
                            <div class="choose-item wow fadeInLeft p-0   d-flex justify-content-between align-items-center h-100  " style="width:calc(50% + 25px)" data-wow-delay="0.3s" data-wow-duration="0.5s">
                                <div class="w-100  " style="height: 0.5px;background-color:silver;"></div>
                                <div class="content flex-grow-0 flex-shrink-0 mt-0   d-flex justify-content-center align-items-center" style="height: 50px;width:50px;border:1px solid silver;">
                                    <div class=" w-75 h-75 bg-info"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 wow fadeInLeft border-0 d-none  d-xl-block" data-wow-duration="0.5s" data-wow-delay="0.7s">
                            <div class="choose-item wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.5s">
                                <div class="icon">
                                    
                                </div>
                                <div class="content ">
                                    
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-xl-4 col-md-6 wow fadeInLeft border-0 d-none  d-xl-block" data-wow-duration="0.5s" data-wow-delay="0.7s">
                            <div class="choose-item wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.5s">
                                <div class="icon">
                                    
                                </div>
                                <div class="content ">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 wow fadeInLeft border-bottom-0 d-none p-0 d-md-block " data-wow-duration="0.5s" data-wow-delay="0.7s">
                            <div class="choose-item wow fadeInLeft p-0   d-flex justify-content-between align-items-center h-100 " style="width:calc(50% + 25px);margin-left:calc(50% - 25px)" data-wow-delay="0.3s" data-wow-duration="0.5s">
                                
                                <div class="content flex-grow-0 flex-shrink-0 mt-0   d-flex justify-content-center align-items-center" style="height: 50px;width:50px;border:1px solid silver;">
                                    <div class=" w-75 h-75 bg-info"></div>
                                </div>
                                <div class="w-100  " style="height: 0.5px;background-color:silver;"></div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 wow fadeInLeft border-bottom-0" data-wow-duration="0.5s" data-wow-delay="0.7s">
                            <div class="choose-item wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.5s">
                                <div class="icon">
                                    
                                </div>
                                <div class="content">
                                    <h4 class="title">{{ __(@$element->data->card_title) }}</h4>
                                    <p class="mt-2">
                                    <?php
                                        echo clean(@$element->data->card_description);
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                </div>
            </div>
            
        </div>
    </section>