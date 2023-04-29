@extends('mainlayout.main')
@section('container')
    <!-- Begin single post -->

    <div class="container">
        <div class="single-post">
            <div class="single-post-header">
                <img src="/image/bg-single-post.jpg" alt="image" class="single-post-img">
                <div class="header-content">
                    <div class="single-post-info">
                        <div class="categories">
                            <span class="badge badge-warning p-4"><i class="ri-checkbox-blank-circle-fill mr"><a
                                        href="#" class="text-dark">Travel</a></i></span>
                            <span class="badge badge-primary p-4"><i class="ri-checkbox-blank-circle-fill mr"><a
                                        href="#" class="text-white">Photography</a></i></span>
                        </div>
                        <div class="single-post-title">
                            <h1 class="text-white">{{ $status->title }}</h1>
                        </div>
                        <div class="single-post-min-description">
                            <p class="text-white">
                                {{ $status->excerpt }}
                            </p>
                        </div>
                        <div class="slide-info">
                            <img src="/image/2.jpg" alt="auther image" class="img auther-img">
                            <span class="slide-info-item auther-name text-white">by <a href="#"
                                    class="link text-white font-size-2">Hilman</a></span>
                            <span class="text-white">.</span>
                            <span
                                class="slide-info-item date-pub text-white">{{ $status->created_at->diffForHumans() }}</span>
                            <span class="text-white">.</span>
                            <span class="slide-info-item date-pub text-white">5 min read</span>
                            <span class="text-white">.</span>
                            <span class="slide-info-item date-pub text-white flex"><i class="ri-eye-fill"></i>2800</span>
                            <span class="text-white">.</span>
                            <span class="slide-info-item date-pub text-white flex"><i
                                    class="ri-heart-fill text-danger"></i>2800</span>
                        </div>
                        <div class="shear-to">
                            <span class="text-white font-size-2">Share on:</span>
                            <ul class="list">
                                <li class="list-item share facebook"><a href="#" class="list-link"><i
                                            class="ri-facebook-box-fill text-white font-size-1"></i></a></li>
                                <li class="list-item share instagram"><a href="#" class="list-link"><i
                                            class="ri-instagram-fill text-white font-size-1"></i></a></li>
                                <li class="list-item share twitter"><a href="#" class="list-link"><i
                                            class="ri-twitter-fill text-white font-size-1"></i></a></li>
                                <li class="list-item share linkedin"><a href="#" class="list-link"><i
                                            class="ri-linkedin-box-fill text-white font-size-1"></i></a></li>
                                <li class="list-item share pinterest"><a href="#" class="list-link"><i
                                            class="ri-pinterest-fill text-white font-size-1"></i></a></li>
                                <li class="list-item share telegram"><a href="#" class="list-link"><i
                                            class="ri-telegram-fill text-white font-size-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-post-body">
                <div class="left-nav">
                    <p class="text-content">
                        {{ $status->body }}
                    </p>
                    <div class="gallery">
                        <img src="https://source.unsplash.com/500x400?{{ $status->category->name }}" alt="image"
                            class="img gallery-img">
                        <img src="https://source.unsplash.com/500x400?{{ $status->category->name }}" alt="image"
                            class="img gallery-img">
                        <img src="https://source.unsplash.com/500x400?{{ $status->category->name }}" alt="image"
                            class="img gallery-img">
                    </div>
                    <p class="text-content">
                        Fulfilled direction use continual set him propriety continued. Saw met applauded favorite
                        deficient
                        engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and
                        passage
                        comfort civilly. Dashwoods see frankness objection abilities. As hastened oh produced prospect
                        formerly up am. Placing forming nay looking old married few has. Margaret disposed of add
                        screened
                        rendered six say his striking confined.
                    </p>
                    <div class="single-page-adds">
                        <i class="ri-double-quotes-r"></i>
                        <p>
                            Success is not the key to happiness. Happiness is the key to success. If you love what you
                            are doing, you will be successful
                        </p>
                    </div>
                    <p class="text-content">
                        Fulfilled direction use continual set him propriety continued. Saw met applauded favorite
                        deficient
                        engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and
                        passage
                        comfort civilly. Dashwoods see frankness objection abilities. As hastened oh produced prospect
                        formerly up am. Placing forming nay looking old married few has. Margaret disposed of add
                        screened
                        rendered six say his striking confined.
                    </p>
                    <div class="prev-next-post">
                        <div class="prev-post">
                            <a href="#">
                                <i class="ri-arrow-left-s-line"></i>
                                <img src="/image/2.jpg" alt="image" class="img img-prev-post">
                            </a>
                            <a href="#" class="link-dark font-size-2">hath gathering lights</a>
                        </div>
                        <div class="prev-post">
                            <a href="#" class="link-dark font-size-2">hath gathering lights</a>
                            <a href="#">
                                <img src="/image/2.jpg" alt="image" class="img img-prev-post">
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                        </div>
                    </div>
                    <div class="auther-info">
                        <a href="#">
                            <img src="/image/06.jpg" alt="profile image" class="img profile-img">
                        </a>
                        <div class="user-info">
                            <div class="info-header">
                                <div class="user-name">
                                    <a href="#">Hilmanudin Aji</a>
                                    <span>a web developer</span>
                                </div>
                                <div class="view-articls">
                                    <a href="#" class="btn btn-more-article">View Articles</a>
                                </div>
                            </div>
                            <div class="info-body">
                                Hilmanudin Aji is junior web developer from Karawang.
                                He is the bad men.:))
                            </div>
                            <div class="info-footer">
                                <ul class="list">
                                    <li class="list-item"><a href="#" class="list-link"><i
                                                class="ri-facebook-box-fill"></i></a></li>
                                    <li class="list-item"><a href="#" class="list-link"><i
                                                class="ri-instagram-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="comment-form">
                        <div class="info-of-user">
                            <div class="form-item">
                                <label for="name" class="form-label">Name *</label>
                                <input type="text" class="form-input">
                            </div>
                            <div class="form-item">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-input">
                            </div>
                        </div>
                        <div class="form-item checkbox-item">
                            <input type="checkbox" class="checkbox"> <span>Save my name and email in this browser
                                for
                                the next time I comment.</span>
                        </div>
                        <div class="form-item">
                            <label for="textarea" class="form-label">Your Comment *</label>
                            <textarea name="textarea" class="form-input" id="textarea" cols="30" rows="10"></textarea>
                        </div>
                        <input type="submit" class="btn btn-submit" value="Post">

                    </form>
                </div>
                <div class="right-nav">
                    <div class="recent-posts">
                        <h2 class="trend-title">Recent post</h2>
                        <div class="recent-post">
                            <a href="#">
                                <img src="/image/3.jpg" alt="image" class="img recent-img">
                            </a>
                            <div class="recent-post-body">
                                <a href="#" class="link-dark font-size-2">
                                    The pros and cons of business agency
                                </a>
                                <span>may 01, 2022</span>
                            </div>
                        </div>
                        <div class="recent-post">
                            <a href="#">
                                <img src="/image/1.jpg" alt="image" class="img recent-img">
                            </a>
                            <div class="recent-post-body">
                                <a href="#" class="link-dark font-size-2">
                                    The pros and cons of business agency
                                </a>
                                <span>nov 05, 2022</span>
                            </div>
                        </div>
                        <div class="recent-post">
                            <a href="#">
                                <img src="/image/2.jpg" alt="image" class="img recent-img">
                            </a>
                            <div class="recent-post-body">
                                <a href="#" class="link-dark font-size-2">
                                    The pros and cons of business agency
                                </a>
                                <span>jun 14, 2022</span>
                            </div>
                        </div>
                        <div class="recent-post">
                            <a href="#">
                                <img src="/image/4.jpg" alt="image" class="img recent-img">
                            </a>
                            <div class="recent-post-body">
                                <a href="#" class="link-dark font-size-2">
                                    The pros and cons of business agency
                                </a>
                                <span>apr 20, 2022</span>
                            </div>
                        </div>
                    </div>
                    <div class="adss-section">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End single post -->
@endsection
