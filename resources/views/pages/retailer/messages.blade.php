@extends('layouts.nav')
@section('content')
    <div class=" px-3 chat_page">
        <div class="d-flex">
            <div class="chat_peoples">
                <div class="row justify-content-between">
                    <div class="col-12 col-xl-6">
                        <h4>Message</h4>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="d-flex justify-content-center position-relative">
                            <select class="form-select" name="" id="">
                                <option>show user only</option>
                                <option>Md Nazmul Isalm</option>
                                <option>Md Babu Islam</option>
                            </select>
                            <div class="select_down d-flex h-100 position-absolute">
                                <i class="fa fa-caret-down"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=" bg-white p-3 mt-3 people_box">
                    <div class="d-flex">
                        <div class="notice_icon">
                            <div class="d-flex justify-content-center">
                                <a href="#">
                                    <img src="{{url('assets/img/icons/Group1084.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="notice_message">
                                <div class="d-flex justify-content-between">
                                    <div><strong>Notice</strong></div>
                                    <div><small>9:00 AM</small></div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetu ...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" bg-white p-3 mt-3 people_box active">
                    <div class="d-flex">
                        <div class="people_icon">
                            <div class="d-flex justify-content-center">
                                <a href="#">
                                    <img src="" alt="">
                                </a>
                                <a href="">4</a>
                            </div>
                        </div>

                        <div class="w-100">
                            <div class="people_message">
                                <div class="d-flex justify-content-between">
                                    <div><strong>Jason</strong></div>
                                    <div><small>7:00 AM</small></div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetu ...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" bg-white p-3 mt-3 people_box">
                    <div class="d-flex">
                        <div class="people_icon">
                            <div class="d-flex justify-content-center">
                                <a href="#">
                                    <img src="" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="people_message">
                                <div class="d-flex justify-content-between">
                                    <div><strong>Admon</strong></div>
                                    <div><small>05/06/2021</small></div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetu ...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" bg-white p-3 mt-3 people_box">
                    <div class="d-flex">
                        <div class="people_icon">
                            <div class="d-flex justify-content-center">
                                <a href="#">
                                    <img src="" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="w-100">
                            <div class="people_message">
                                <div class="d-flex justify-content-between">
                                    <div><strong>ACCESSORIES AUTO PAR...</strong></div>
                                    <div><small>02/06/2021</small></div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetu ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" bg-white mt-5 py-2 chat_form">
                <div class=" px-4 py-2 chat_people_name">
                    <div class="d-flex">
                        <div class="people_img_s"><a href="#"><img src="#" alt=""></a></div>
                        <div><a href="#">Admon</a></div>
                    </div>
                </div>
                <div class=" px-4 mb-3 message_box">
                    <div class=" py-3 date">
                        <p class="text-center">06/06/2021 5:22 PM</p>
                    </div>
                    <div class=" d-flex message_left">
                        <div>
                            <div class="people_img">
                                <img src="" alt="">
                            </div>
                        </div>
                        <div class="message">
                            Lorem ipsum dolor
                        </div>
                    </div>
                    <div class=" mx-5 my-3  d-flex message_left">
                        <div class="message">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                            volutpat. Ut wisi enim ad minim Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit

                        </div>
                    </div>
                    <div class=" py-3 mt-xl-5 date">
                        <p class="text-center">06/06/2021 5:22 PM</p>
                    </div>
                    <div class=" d-flex justify-content-end message_right">
                        <div class=" d-flex justify-content-end">
                            <div class="message w-75">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                nibh euismod Lorem ipsum dolor sit amet
                            </div>
                            <div class="h-100">
                                <div class="people_img">
                                    <img src="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex justify-content-end my-3 message_right">
                        <div class=" d-flex ">
                            <div class="message p-5 mb-5">
                                Lorem ipsum dolor
                            </div>
                            <div class="h-100">
                                <div class="people_img">
                                    <img src="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=" message_form">
                    <div class="d-flex w-100 justify-content-center align-items-center">
                        <i class="far fa-grin-alt"> </i>
                        <div class="w-100"><input type="text" class="w-100 h-100 form-control" name=""
                                                  placeholder="Type a message">
                            <i class="fa fa-paperclip"></i>
                        </div>
                        <button type="submit"><i class="fa fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
