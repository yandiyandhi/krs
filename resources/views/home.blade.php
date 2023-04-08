@extends('mainlayout.main')
@section('container')
    <div class="container-fluid">
        <div class="container">
            <img src="/image/BrandLogo.jpg" alt="">
        @section('content')
            <div class="home">
                <div class="content">
                    <div class="container">
                        {{-- <img src="/image/BrandLogo.jpg" alt=""> --}}
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, possimus, minima corporis
                            voluptate,
                            vero saepe sequi laborum dolorum aut provident nesciunt itaque iure ipsam accusantium atque
                            officia!
                            Totam, quibusdam repellat harum vero quo dicta maiores cupiditate temporibus rem? Tempore alias
                            s
                            oluta necessitatibus nisi laboriosam architecto, dolore pariatur provident reiciendis rem
                            dignissimos
                            velit nulla iure, animi earum quibusdam. Magnam veniam deleniti itaque debitis delectus nesciunt
                            similique
                            id, qui repellendus ipsam eaque ut quidem soluta in rerum quibusdam excepturi explicabo sequi
                            iste est
                            unde perspiciatis non? Perspiciatis dignissimos commodi perferendis, provident ut assumenda
                            asperiores
                            sed, nostrum repellat quisquam cumque deleniti nulla quod.</p>
                    </div>

                </div>
                <div class="row border content">
                    {{-- <div class="border-bottom">
                <div style="background: #2188ce; width: 9%;">
                    <div class="d-flex flex-row mb-3 text-light">
                        <div class="p-2"><i class="bi bi-gear fs-5"></i>
                            <span style="position: absolute; margin-top: 3px; margin-left: 8px;">Service</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-0 text-center border-top">
                <div class="row gx-5 d-flex justify-content-start align-items-start">
                    <div class="col">
                        <div class="p-3">Custom column padding</div>
                    </div>
                    <div class="col">
                        <div class="p-3">Custom column padding</div>
                    </div>
                </div> --}}
                </div>
                <div class="row gx-2 d-flex justify-content-start align-items-start service">
                    <div class="col-8">
                        <div class="p-3">
                            <div class="border-bottom">
                                <div class="services" style="background: #2188ce; width: 20%;">
                                    <div class="d-flex flex-row mb-3 text-light">
                                        <div class="p-2"><i class="bi bi-gear fs-5"></i>
                                            <span
                                                style="position: absolute; margin-top: 3px; margin-left: 8px;">Service</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-0 text-center border-top sercont">
                                    <div class="row gx-2 d-flex justify-content-start align-items-start">
                                        <div class="card" style="width: 18rem;">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make
                                                    up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-2 d-flex justify-content-start align-items-start mt-2">
                                        <div class="card" style="width: 18rem;">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make
                                                    up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <div class="border-bottom">
                                <div class="sosial" style="background: #e02c2c; width: 40%;">
                                    <div class="d-flex flex-row mb-3 text-light">
                                        <div class="p-2"><i class="bi bi-gear fs-5"></i>
                                            <span
                                                style="position: absolute; margin-top: 3px; margin-left: 8px;">Service</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-0 text-center border-top sercont">
                                    <div class="row gx-2 d-flex justify-content-start align-items-start">
                                        <div class="col">
                                            <div class="p-3 border">
                                                <a href="#"><i class="bi bi-facebook fs-1"></i></a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="p-3 border"><a href="#"><i
                                                        class="bi bi-instagram fs-1"></a></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="p-3 border"><a href=""><i class="bi bi-tiktok fs-1"></a></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-2 d-flex justify-content-start align-items-start mt-2">
                                        <div class="col">
                                            <div class="p-3 border"><a href=""><i class="bi bi-youtube fs-1"></a></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="p-3 border">
                                                <a href=""><i class="bi bi-telegram fs-1"></i></a></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="p-3 border">
                                                <a href=""><i class="bi bi-telegram fs-1"></i></a></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="border">
            <div class="border-bottom">
                <div class="d-flex flex-row mb-3 text-light mt-3" style="background: #2188ce; width: 9%; height: 50px;">
                    <div class="p-2"><i class="bi bi-globe fs-5"></i></i>
                        <span style="position: absolute; margin-top: 3px; margin-left: 8px;">News</span>
                    </div>
                </div>
            </div>
            <div class="container px-0 text-center">
                <div class="row gx-5 d-flex justify-content-start align-items-start">
                    <div class="col">
                        <div class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, distinctio?
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, tempora.
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>
    @endsection
