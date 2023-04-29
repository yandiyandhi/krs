@extends('mainlayout.main')
@section('container')
    <!-- Begin trending alert -->
    <div class="container" style="margin-bottom: 10px">
        <div class="trending">
            <span class="trending-btn">Trending:</span>
            <div>
                <p class="trending-content active">1. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero,
                    hic.</p>
                <p class="trending-content">2. Lorem ipsum, dolor sit amet consecteturc.</p>
                <p class="trending-content">3. Lorem ipsum, dolor sit amet consectetur Lorem, ipsum dolor sit amet
                    consectetur adipisicing elit. Fuga amet non, possimus quisquam nemo expedita!</p>
                <p class="trending-content">4. Lorem ipsum, dolor sit amet Lorem ipsum dolor sit amet.. Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Explicabo atque magni laboriosam nobis reiciendis eos
                    placeat tempore in quibusdam. Beatae vero distinctio consectetur fugit praesentium. Eum, distinctio
                    quasi, quas, porro voluptatum doloremque quos excepturi cupiditate qui minus optio nihil dolor
                    repellat esse. Labore officiis amet molestias maxime ducimus doloremque velit, in hic voluptas unde
                    distinctio praesentium eum, quasi sint facilis explicabo perferendis deleniti repellendus, incidunt
                    eos. Eligendi minus repellat commodi saepe distinctio cupiditate consequatur. Quod repellat
                    perferendis fugit adipisci, modi exercitationem, quos unde eius quia nisi quasi debitis reiciendis,
                    voluptas quam rerum delectus molestiae est dolorem consequatur vel dicta at.</p>
            </div>
            <div>
                <i class="ri-arrow-drop-left-line perv" id="perv"></i>
                <i class="ri-arrow-drop-right-line next" id="next"></i>
            </div>
        </div>
    </div>
    <!-- End trending alert -->
    <!-- Begin Post Items -->
    <div class="container">
        <div class="post-list">
            <div class="breadcrumb">
                <div class="bread-title">
                    <h2>Post list style</h2>
                </div>
                <div class="bread-body">
                    <a href="/"><i class="ri-home-2-line mr"></i>Home</a>
                    <span class="text-secondery">.</span>
                    <span class="text-secondery">All post</span>
                </div>
            </div>
            <div class="post-body">
                <div class="post-item-list">
                    {{-- <div class="post-item">
                        <div class="post-img">
                            <a href="/news">
                                <img src="/image/3.jpg" alt="image" class="img img-post">
                            </a>
                        </div>
                        <div class="post-item-content">
                            <span class="badge badge-danger"><i
                                    class="ri-checkbox-blank-circle-fill mr"></i>Lifestyle</span>
                            <a href="/news" class="link-dark">The pros and cons of business agency</a>
                            <p class="text-secondery">
                                Pleasure and so read the was hope entire first decided the so must have as on was want
                                up of I will rival in came this touched got a physics to travelling so all especially
                                refinement monstrous desk they was arrange the overall helplessly out of particularly
                                ill are purer Person she control of to beginnings view looked eyes Than continues its
                                and because
                            </p>
                            <div class="slide-info">
                                <img src="/image/2.jpg" alt="auther image" class="img auther-img">
                                <span class="slide-info-item auther-name text-secondery">by <a
                                        href="#"vclass="link-dark text-secondery font-size-2">Ali</a></span>
                                <span class="text-secondery">.</span>
                                <span class="slide-info-item date-pub text-secondery">nov 15, 2022</span>
                            </div>
                        </div>
                    </div> --}}
                    @if ($status->count())
                        {{-- Data NEw --}}
                        <div class="post-item">
                            <div class="post-img">
                                <a href="/goodnews/{{ $status[0]->slug }}">
                                    <img src="https://source.unsplash.com/500x400?{{ $status[0]->category->name }}"
                                        alt="image" class="img img-post">
                                </a>
                            </div>
                            <div class="post-item-content">
                                {{-- <span class="badge badge-danger"><i class="ri-checkbox-blank-circle-fill mr"></i>Lifestyle</span> --}}
                                <a href="/goodnews/{{ $status[0]->slug }}" class="link-dark">{{ $status[0]->title }}</a>
                                <p class="text-secondery">
                                    {{ $status[0]->excerpt }}
                                </p>
                                <div class="slide-info">
                                    <img src="/image/2.jpg" alt="auther image" class="img auther-img">
                                    <span class="slide-info-item auther-name text-secondery">by <a href="#"
                                            class="link-dark text-secondery font-size-2">Ali</a></span>
                                    <span class="text-secondery">.</span>
                                    <span
                                        class="slide-info-item date-pub text-secondery">{{ $status[0]->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    @else
                        <p class="text-center fs-4">No Post Found</p>
                    @endif

                    <div class="post-item">
                        <div class="post-img">
                            <a href="/news">
                                <img src="/image/2.jpg" alt="image" class="img img-post">
                            </a>
                        </div>
                        <div class="post-item-content">
                            {{-- <span class="badge badge-danger"><i class="ri-checkbox-blank-circle-fill mr"></i>Lifestyle</span> --}}
                            <a href="/news" class="link-dark">The pros and cons of business agency</a>
                            <p class="text-secondery">
                                Pleasure and so read the was hope entire first decided the so must have as on was want
                                up of I will rival in came this touched got a physics to travelling so all especially
                                refinement monstrous desk they was arrange the overall helplessly out of particularly
                                ill are purer Person she control of to beginnings view looked eyes Than continues its
                                and because
                            </p>
                            <div class="slide-info">
                                <img src="/image/2.jpg" alt="auther image" class="img auther-img">
                                <span class="slide-info-item auther-name text-secondery">by <a href="#"
                                        class="link-dark text-secondery font-size-2">Ali</a></span>
                                <span class="text-secondery">.</span>
                                <span class="slide-info-item date-pub text-secondery">nov 15, 2022</span>
                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-img">
                            <a href="/news">
                                <img src="/image/1.jpg" alt="image" class="img img-post">
                            </a>
                        </div>
                        <div class="post-item-content">
                            <span class="badge badge-danger"><i
                                    class="ri-checkbox-blank-circle-fill mr"></i>Lifestyle</span>
                            <a href="/news" class="link-dark">The pros and cons of business agency</a>
                            <p class="text-secondery">
                                Pleasure and so read the was hope entire first decided the so must have as on was want
                                up of I will rival in came this touched got a physics to travelling so all especially
                                refinement monstrous desk they was arrange the overall helplessly out of particularly
                                ill are purer Person she control of to beginnings view looked eyes Than continues its
                                and because
                            </p>
                            <div class="slide-info">
                                <img src="/image/2.jpg" alt="auther image" class="img auther-img">
                                <span class="slide-info-item auther-name text-secondery">by <a href="#"
                                        class="link-dark text-secondery font-size-2">Ali</a></span>
                                <span class="text-secondery">.</span>
                                <span class="slide-info-item date-pub text-secondery">nov 15, 2022</span>
                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-img">
                            <a href="/news">
                                <img src="/image/4.jpg" alt="image" class="img img-post">
                            </a>
                        </div>
                        <div class="post-item-content">
                            <span class="badge badge-danger"><i
                                    class="ri-checkbox-blank-circle-fill mr"></i>Lifestyle</span>
                            <a href="/news" class="link-dark">The pros and cons of business agency</a>
                            <p class="text-secondery">
                                Pleasure and so read the was hope entire first decided the so must have as on was want
                                up of I will rival in came this touched got a physics to travelling so all especially
                                refinement monstrous desk they was arrange the overall helplessly out of particularly
                                ill are purer Person she control of to beginnings view looked eyes Than continues its
                                and because
                            </p>
                            <div class="slide-info">
                                <img src="/image/2.jpg" alt="auther image" class="img auther-img">
                                <span class="slide-info-item auther-name text-secondery">by <a href="#"
                                        class="link-dark text-secondery font-size-2">Ali</a></span>
                                <span class="text-secondery">.</span>
                                <span class="slide-info-item date-pub text-secondery">nov 15, 2022</span>
                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-img">
                            <a href="/news">
                                <img src="/image/3.jpg" alt="image" class="img img-post">
                            </a>
                        </div>
                        <div class="post-item-content">
                            <span class="badge badge-danger"><i
                                    class="ri-checkbox-blank-circle-fill mr"></i>Lifestyle</span>
                            <a href="/news" class="link-dark">The pros and cons of business agency</a>
                            <p class="text-secondery">
                                Pleasure and so read the was hope entire first decided the so must have as on was want
                                up of I will rival in came this touched got a physics to travelling so all especially
                                refinement monstrous desk they was arrange the overall helplessly out of particularly
                                ill are purer Person she control of to beginnings view looked eyes Than continues its
                                and because
                            </p>
                            <div class="slide-info">
                                <img src="/image/2.jpg" alt="auther image" class="img auther-img">
                                <span class="slide-info-item auther-name text-secondery">by <a href="#"
                                        class="link-dark text-secondery font-size-2">Ali</a></span>
                                <span class="text-secondery">.</span>
                                <span class="slide-info-item date-pub text-secondery">nov 15, 2022</span>
                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-img">
                            <a href="/news">
                                <img src="/image/1.jpg" alt="image" class="img img-post">
                            </a>
                        </div>
                        <div class="post-item-content">
                            <span class="badge badge-danger"><i
                                    class="ri-checkbox-blank-circle-fill mr"></i>Lifestyle</span>
                            <a href="/news" class="link-dark">The pros and cons of business agency</a>
                            <p class="text-secondery">
                                Pleasure and so read the was hope entire first decided the so must have as on was want
                                up of I will rival in came this touched got a physics to travelling so all especially
                                refinement monstrous desk they was arrange the overall helplessly out of particularly
                                ill are purer Person she control of to beginnings view looked eyes Than continues its
                                and because
                            </p>
                            <div class="slide-info">
                                <img src="/image/2.jpg" alt="auther image" class="img auther-img">
                                <span class="slide-info-item auther-name text-secondery">by <a href="#"
                                        class="link-dark text-secondery font-size-2">Ali</a></span>
                                <span class="text-secondery">.</span>
                                <span class="slide-info-item date-pub text-secondery">nov 15, 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-nav">
                    <div class="trend-topic">
                        <h2 class="trend-title">Trending topics</h2>
                        <div class="topics">
                            <a href="#">
                                <div class="topic-item">
                                    <img src="/image/3.jpg" alt="image" class="img img-topic">
                                    <span class="topic-title link">Travel</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="topic-item">
                                    <img src="/image/2.jpg" alt="image" class="img img-topic">
                                    <span class="topic-title link">Business</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="topic-item">
                                    <img src="/image/4.jpg" alt="image" class="img img-topic">
                                    <span class="topic-title link">Marketing</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="topic-item">
                                    <img src="/image/1.jpg" alt="image" class="img img-topic">
                                    <span class="topic-title link">Photography</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="topic-item">
                                    <img src="/image/2.jpg" alt="image" class="img img-topic">
                                    <span class="topic-title link">Sports</span>
                                </div>
                            </a>
                        </div>
                        <a href="#" class="trend-more">View all categories</a>
                    </div>
                    <div class="recent-posts">
                        <h2 class="trend-title">Recent post</h2>
                        <div class="recent-post">
                            <a href="/news">
                                <img src="/image/3.jpg" alt="image" class="img recent-img">
                            </a>
                            <div class="recent-post-body">
                                <a href="/news" class="link-dark font-size-2">
                                    The pros and cons of business agency
                                </a>
                                <span>may 01, 2022</span>
                            </div>
                        </div>
                        <div class="recent-post">
                            <a href="/news">
                                <img src="/image/1.jpg" alt="image" class="img recent-img">
                            </a>
                            <div class="recent-post-body">
                                <a href="/news" class="link-dark font-size-2">
                                    The pros and cons of business agency
                                </a>
                                <span>nov 05, 2022</span>
                            </div>
                        </div>
                        <div class="recent-post">
                            <a href="/news">
                                <img src="/image/2.jpg" alt="image" class="img recent-img">
                            </a>
                            <div class="recent-post-body">
                                <a href="/news" class="link-dark font-size-2">
                                    The pros and cons of business agency
                                </a>
                                <span>jun 14, 2022</span>
                            </div>
                        </div>
                        <div class="recent-post">
                            <a href="/news">
                                <img src="/image/4.jpg" alt="image" class="img recent-img">
                            </a>
                            <div class="recent-post-body">
                                <a href="/news" class="link-dark font-size-2">
                                    The pros and cons of business agency
                                </a>
                                <span>apr 20, 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <a href="#" class="prev-page">
                    <i class="ri-arrow-left-circle-line"></i>
                </a>
                <a href="#" class="next-page">
                    <i class="ri-arrow-right-circle-line"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- End Post Items -->
@endsection
