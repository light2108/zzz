@extends('frontend.index')
@section('content')
    <div class="all-product-area mtb-45">
        <div class="container">
            <div class="row">
                @include('frontend.setting')
                <div class="col-xl-8 col-lg-9 col-md-12 col-12">
                    <div class="product box-shadow terms">
                        <div class="product-title bg-1 text-center">
                            <p>Điều khoản chính sách</p>
                        </div>
                        <div class="product-title text-center">
                            <img src="frontend/img/term.png" alt="" />
                        </div>
                        <hr>
                        <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries, but also
                                    the leap into electronic typesetting, remaining essentially unchanged
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries, but also
                                    the leap into electronic typesetting, remaining essentially unchanged
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries, but also
                                    the leap into electronic typesetting, remaining essentially unchanged
                                </p>
                                <div class="form-group text-left radio-term">
                                    <input type="radio">&nbsp;Tôi đồng ý với điều khoản sử dụng & chính sách bảo mật
                                </div>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
