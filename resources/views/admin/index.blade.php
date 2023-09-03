@extends('admin.layouts.layout')

@section('content')
    <div class="main_content wrapper_content">
        <div class="main_card blue">
            <div class="card_icon">
                <i class="fas fa-th-list"></i>
            </div>
            <div class="card_body">
                <div class="card_title">
                    Categories :
                </div>
                <div class="card_look">
                    <a href="show_categories.html">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
                <div class="card_edit">
                    <a href="create_categories.html">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="main_card green">
            <div class="card_icon">
                <i class="fas fa-tags"></i>
            </div>
            <div class="card_body">
                <div class="card_title">
                    Tags :
                </div>
                <div class="card_look">
                    <a href="show_tags.html">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
                <div class="card_edit">
                    <a href="create_tags.html">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="main_card red">
            <div class="card_icon">
                <i class="fas fa-paste"></i>
            </div>
            <div class="card_body">
                <div class="card_title">
                    Posts :
                </div>
                <div class="card_look">
                    <a href="show_posts.html">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
                <div class="card_edit">
                    <a href="create_posts.html">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="main_card red">
            <div class="card_icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="card_body">
                <div class="card_title">
                    Users :
                </div>
                <div class="card_look">
                    <a href="show_users.html">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
                <div class="card_edit">
                    <a href="create_users.html">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="main_card yellow">
            <div class="card_icon">
                <i class="fas fa-chart-bar"></i>
            </div>
            <div class="card_body">
                <div class="card_title">
                    Statistics :
                </div>
                <div class="card_look">
                    <i class="fas fa-eye"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="main_community wrapper_content">
        <div class="main_comments">
            <div class="main_comments_count grey">
                Lust comments (8)
            </div>
            <div class="main_comments_lent">
                <div class="comments_user grey">
                    <div class="comments_user_profile">
                        <div class="comments_user_photo">
                            <img src="{{asset('assets/admin/src/avatars/avatar01.jpg')}}" alt="">
                        </div>
                        <div class="comments_user_name">
                            <a href="">
                                <p>Ivan Ivanov</p>
                            </a>
                        </div>
                    </div>
                    <div class="comments_user_comment">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, dolore libero nisi
                            officia rerum unde.
                        </p>
                    </div>
                </div>
                <div class="comments_user grey">
                    <div class="comments_user_profile">
                        <div class="comments_user_photo">
                            <img src="{{asset('assets/admin/src/avatars/avatar02.jpg')}}" alt="">
                        </div>
                        <div class="comments_user_name">
                            <a href="">
                                <p>Ivan Ivanov</p>
                            </a>
                        </div>
                    </div>
                    <div class="comments_user_comment">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iure molestias praesentium
                            quam qui veritatis?</p>
                    </div>
                </div>
                <div class="comments_user grey">
                    <div class="comments_user_profile">
                        <div class="comments_user_photo">
                            <img src="{{asset('assets/admin/src/avatars/avatar03.jpg')}}" alt="">
                        </div>
                        <div class="comments_user_name">
                            <a href="">
                                <p>Ivan Ivanov</p>
                            </a>
                        </div>
                    </div>
                    <div class="comments_user_comment">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid debitis dignissimos
                            dolorum eveniet fugit harum perferendis placeat quod.
                        </p>
                    </div>
                </div>
            </div>
            <div class="comments_user_plus grey">
                <div class="comments_user_add_more">
                    <a href="">
                        <i class="fas fa-plus"></i> Show all...
                    </a>
                </div>
            </div>
        </div>
        <div class="main_users">
            <div class="main_users_count graphite">
                Lust users (7)
            </div>
            <div class="main_users_lent graphite">
                <div class="users_user">
                    <div class="users_user_profile">
                        <div class="users_user_avatar">
                            <img src="{{asset('assets/admin/src/avatars/avatar01.jpg')}}" alt="">
                        </div>
                        <div class="users_user_name">
                            <a href="">
                                <p>Ivan Ivanov</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="users_user">
                    <div class="users_user_profile">
                        <div class="users_user_avatar">
                            <img src="{{asset('assets/admin/src/avatars/avatar02.jpg')}}" alt="">
                        </div>
                        <div class="users_user_name">
                            <a href="">
                                <p>Kaban Kabanov</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="users_user">
                    <div class="users_user_profile">
                        <div class="users_user_avatar">
                            <img src="{{asset('assets/admin/src/avatars/avatar03.jpg')}}" alt="">
                        </div>
                        <div class="users_user_name">
                            <a href="">
                                <p>Bob Green</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="users_user">
                    <div class="users_user_profile">
                        <div class="users_user_avatar">
                            <img src="{{asset('assets/admin/src/avatars/avatar09.jpg')}}" alt="">
                        </div>
                        <div class="users_user_name">
                            <a href="">
                                <p>Eddy Brown</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="users_user">
                    <div class="users_user_profile">
                        <div class="users_user_avatar">
                            <img src="{{asset('assets/admin/src/avatars/avatar05.jpg')}}" alt="">
                        </div>
                        <div class="users_user_name">
                            <a href="">
                                <p>Conor McGregor</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="users_user">
                    <div class="users_user_profile">
                        <div class="users_user_avatar">
                            <img src="{{asset('assets/admin/src/avatars/avatar06.jpg')}}" alt="">
                        </div>
                        <div class="users_user_name">
                            <a href="">
                                <p>Franky Edgar</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="users_user">
                    <div class="users_user_plus grey">
                        <div class="users_user_add_more">
                            <a href="">
                                <i class="fas fa-plus"></i> All user...
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
