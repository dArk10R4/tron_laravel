@php
$content = content('roadmap.content');
[$elements] = element('roadmap.element')->chunk(3);


@endphp
    <section class="benefit-section sp_pt_120 sp_pb_120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="sp_site_header  wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h2 class="sp_site_title">{{ __(@$content->data->title) }}</h2>
                    </div>
                </div>
            </div>
            <div class="row benefit-items-wrapper">
            @foreach ($elements as $key => $element)
                @if ($key%2==0)
                <div class="col-xl-4 col-md-6 wow fadeInUp border-bottom-0" data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            
                        </div>
                        <div class="benefit-content">
                            <h4 class="title">{{__(@$element->data->card_title)}}</h4>
                            <p class="mt-2"> <?php
                                echo clean(@$element->data->card_description);
                                ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp border-0 d-none p-0 d-md-block" data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="benefit-item p-0   d-flex justify-content-between align-items-center h-100  " style="width:calc(50% + 25px)">
                        <div class="w-100  " style="height: 0.5px;background-color:silver;"></div>
                        <div class="benefit-content flex-grow-0 flex-shrink-0 mt-0   d-flex justify-content-center align-items-center" style="height: 50px;width:50px;border:1px solid silver;">
                            <div class=" w-75 h-75 bg-info"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp border-0 d-none  d-xl-block" data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            
                        </div>
                        <div class="benefit-content ">
                            
                        </div>
                    </div>
                </div>
                @else
                <div class="col-xl-4 col-md-6 wow fadeInUp border-0 d-none  d-xl-block" data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            
                        </div>
                        <div class="benefit-content ">
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp border-bottom-0 d-none p-0 d-md-block " data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="benefit-item p-0   d-flex justify-content-between align-items-center h-100 " style="width:calc(50% + 25px);margin-left:calc(50% - 25px)">
                        
                        <div class="benefit-content flex-grow-0 flex-shrink-0 mt-0   d-flex justify-content-center align-items-center" style="height: 50px;width:50px;border:1px solid silver;">
                            <div class=" w-75 h-75 bg-info"></div>
                        </div>
                        <div class="w-100  " style="height: 0.5px;background-color:silver;"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp border-bottom-0" data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            
                        </div>
                        <div class="benefit-content">
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
    </section>