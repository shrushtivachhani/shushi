<?php
include "header.php";
?>

<section>
    <div class="gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="page-contents" class="row merged20">
                        <div class="col-lg-3">
                            <aside class="sidebar static left">
                                <div class="widget whitish low-opacity">
                                    <img src="images/time-clock.png" alt="">
                                    <div class="bg-image" style="background-image: url(images/resources/time-bg.jpg)"></div>
                                    <div class="date-time">
                                        <div class="realtime">
                                            <span id="hours">00</span>
                                            <span id="point">:</span>
                                            <span id="min">00</span>
                                        </div>
                                        <span id="date"></span>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title">Complete Your Profile</h4>
                                    <span>Your Profile is missing followings!</span>
                                    <div data-progress="tip" class="progress__outer" data-value="0.67">
                                        <div class="progress__inner">82%</div>
                                    </div>
                                    <ul class="prof-complete">
                                        <li><i class="icofont-plus-square"></i> <a href="#" title="">Upload Your Picture</a><em>10%</em></li>
                                        <li><i class="icofont-plus-square"></i> <a href="#" title="">Your University?</a><em>20%</em></li>
                                        <li><i class="icofont-plus-square"></i> <a href="#" title="">Add Payment Method</a><em>20%</em></li>
                                    </ul>
                                </div><!-- complete profile widget -->
                                <div class="advertisment-box">
                                    <h4 class=""><i class="icofont-info-circle"></i> advertisment</h4>
                                    <figure>
                                        <a href="#" title="Advertisment"><img src="images/resources/ad-widget2.gif" alt=""></a>
                                    </figure>
                                </div><!-- adversment widget -->


                                <div class="widget">
                                    <h4 class="widget-title">Recent Blogs <a class="see-all" href="#" title="">See All</a></h4>
                                    <ul class="recent-links">
                                        <li>
                                            <figure><img alt="" src="images/resources/recentlink-1.jpg"></figure>
                                            <div class="re-links-meta">
                                                <h6><a title="" href="#">Moira's fade reach much farther...</a></h6>
                                                <span>2 weeks ago </span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img alt="" src="images/resources/recentlink-2.jpg"></figure>
                                            <div class="re-links-meta">
                                                <h6><a title="" href="#">Daniel asks The voice of doomfist...</a></h6>
                                                <span>3 months ago </span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img alt="" src="images/resources/recentlink-3.jpg"></figure>
                                            <div class="re-links-meta">
                                                <h6><a title="" href="#">The socimo over watch scandals.</a></h6>
                                                <span>1 day before</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- recent blog -->

                                <div class="widget web-links stick-widget">
                                    <h4 class="widget-title">Useful Links <a title="" href="#" class="see-all">See All</a></h4>
                                    <ul>
                                        <li><i class="icofont-dotted-right"></i> <a title="" href="#">about</a></li>
                                        <li><i class="icofont-dotted-right"></i> <a title="" href="#">career</a></li>
                                        <li><i class="icofont-dotted-right"></i> <a title="" href="#">advertise</a></li>
                                        <li><i class="icofont-dotted-right"></i> <a title="" href="#">socimo Apps</a></li>
                                        <li><i class="icofont-dotted-right"></i> <a title="" href="#">socimo Blog</a></li>
                                        <li><i class="icofont-dotted-right"></i> <a title="" href="#">Help</a></li>
                                        <li><i class="icofont-dotted-right"></i> <a title="" href="#">socimo Gifts</a></li>
                                        <li><i class="icofont-dotted-right"></i> <a title="" href="#">content policy</a></li>
                                        <li><i class="icofont-dotted-right"></i> <a title="" href="#">User Policy</a></li>
                                    </ul>
                                    <p>&copy; Socimo 2020. All Rights Reserved.</p>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-6">
                            <ul class="filtr-tabs">
                                <li><a class="active" href="#" title="">Home</a></li>
                                <li><a href="#" title="">Recent</a></li>
                                <li><a href="#" title="">Favourit</a></li>
                            </ul><!-- tab buttons -->
                            <div class="main-wraper">
                                <span class="new-title">Create New Post</span>
                                <div class="new-post">
                                    <form method="post">
                                        <i class="icofont-pen-alt-1"></i>
                                        <input type="text" placeholder="Create New Post">
                                    </form>
                                    <ul class="upload-media">
                                        <li>
                                            <a href="#" title="">
                                                <i><img src="images/image.png" alt=""></i>
                                                <span>Photo/Video</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i><img src="images/activity.png" alt=""></i>
                                                <span>Feeling/Activity</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="live-stream.html" title="">
                                                <i><img src="images/live-stream.png" alt=""></i>
                                                <span>Live Stream</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- create new post -->
                            <div class="story-card">
                                <div class="story-title">
                                    <h5>Recent Stories</h5>
                                    <a href="#" title="">See all</a>
                                </div>
                                <div class="story-wraper ">
                                    <img src="images/resources/story-card5.jpg" alt="">
                                    <div class="users-dp">
                                        <img src="images/resources/user3.jpg" alt="">
                                    </div>
                                    <a class="add-new-stry" href="#" title=""><i class="icofont-plus"></i></a>
                                    <span>Add Your Story</span>
                                </div>
                                <div class="story-wraper">
                                    <img src="images/resources/story-card.jpg" alt="">
                                    <div class="users-dp">
                                        <img src="images/resources/user6.jpg" alt="">
                                    </div>
                                    <span>Tamana Bhatia</span>
                                </div>
                                <div class="story-wraper">
                                    <img src="images/resources/story-card2.jpg" alt="">
                                    <div class="users-dp">
                                        <img src="images/resources/user7.jpg" alt="">
                                    </div>
                                    <span>Emily Caros</span>
                                </div>
                                <div class="story-wraper">
                                    <img src="images/resources/story-card3.jpg" alt="">
                                    <div class="users-dp">
                                        <img src="images/resources/user8.jpg" alt="">
                                    </div>
                                    <span>Daniel Cardos</span>
                                </div>
                                <div class="story-wraper">
                                    <img src="images/resources/story-card4.jpg" alt="">
                                    <div class="users-dp">
                                        <img src="images/resources/user4.jpg" alt="">
                                    </div>
                                    <span>Emma Watson</span>
                                </div>
                            </div><!-- stories -->
                            
                            <div class="main-wraper">
                                <div class="user-post">
                                    <div class="friend-info">
                                        <figure>
                                            <i class="icofont-learn"></i>
                                        </figure>
                                        <div class="friend-name">
                                            <ins><a title="" href="profile.php">Suggested</a></ins>
                                            <span><i class="icofont-runner-alt-1"></i> Follow similar People</span>
                                        </div>
                                        <ul class="suggested-caro">
                                            <li>
                                                <figure><img src="images/resources/speak-1.jpg" alt=""></figure>
                                                <span>Amy Watson</span>
                                                <ins>Department of Socilolgy</ins>
                                                <a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/speak-2.jpg" alt=""></figure>
                                                <span>Muhammad Khan</span>
                                                <ins>Department of Socilolgy</ins>
                                                <a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/speak-3.jpg" alt=""></figure>
                                                <span>Sadia Gill</span>
                                                <ins>Department of Socilolgy</ins>
                                                <a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- suggested friends -->
                            <div class="main-wraper">
                                <div class="user-post">
                                    <div class="friend-info">
                                        <figure>
                                            <em>
                                                <svg style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                                    <path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path>
                                                </svg></em>
                                            <img alt="" src="images/resources/user7.jpg">
                                        </figure>
                                        <div class="friend-name">
                                            <div class="more">
                                                <div class="more-post-optns">
                                                    <i class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></i>
                                                    <ul>
                                                        <li>
                                                            <i class="icofont-pen-alt-1"></i>Edit Post
                                                            <span>Edit This Post within a Hour</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-ban"></i>Hide Post
                                                            <span>Hide This Post</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-ui-delete"></i>Delete Post
                                                            <span>If inappropriate Post By Mistake</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-flag"></i>Report
                                                            <span>Inappropriate content</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ins>
                                                <a title="verified" href="profile.php">Andrew</a> Post Audio</ins>
                                            <span><i class="icofont-globe"></i> published: Sep,15 2020</span>
                                        </div>
                                        <div class="post-meta">
                                            <p>
                                                Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
                                            </p>
                                            <div class="aud-vid">
                                                <audio id="plyr-audio-player" class="audio-player" controls>
                                                    <source src="https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3" type="audio/mp3" />
                                                    <source src="https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.ogg" type="audio/ogg" />
                                                </audio>
                                            </div>
                                            <div class="we-video-info">
                                                <ul>
                                                    <li>
                                                        <span title="views" class="views">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                    <circle cx="12" cy="12" r="3"></circle>
                                                                </svg></i>
                                                            <ins>1.2k</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span title="Comments" class="Recommend">
                                                            <i>
                                                                <svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                                                </svg></i>
                                                            <ins>54</ins>
                                                        </span>

                                                    </li>
                                                    <li>
                                                        <span title="follow" class="Follow">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg></i>
                                                            <ins>5k</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="share-pst" title="Share">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2">
                                                                    <circle cx="18" cy="5" r="3"></circle>
                                                                    <circle cx="6" cy="12" r="3"></circle>
                                                                    <circle cx="18" cy="19" r="3"></circle>
                                                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                                </svg></i>
                                                            <ins>205</ins>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <a href="post_detail.php" title="" class="reply">Reply <i class="icofont-reply"></i></a>
                                            </div>
                                            <div class="stat-tools">
                                                <div class="box">
                                                    <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
                                                        <div class="Emojis">
                                                            <div class="Emoji Emoji--like">
                                                                <div class="icon icon--like"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--love">
                                                                <div class="icon icon--heart"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--haha">
                                                                <div class="icon icon--haha"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--wow">
                                                                <div class="icon icon--wow"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--sad">
                                                                <div class="icon icon--sad"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--angry">
                                                                <div class="icon icon--angry"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box">
                                                    <div class="Emojis">
                                                        <div class="Emoji Emoji--like">
                                                            <div class="icon icon--like"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--love">
                                                            <div class="icon icon--heart"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--haha">
                                                            <div class="icon icon--haha"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--wow">
                                                            <div class="icon icon--wow"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--sad">
                                                            <div class="icon icon--sad"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--angry">
                                                            <div class="icon icon--angry"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
                                                <a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
                                                <div class="emoji-state">
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/thumb.png"> Likes</span>
                                                            <ul class="namelist">
                                                                <li>Jhon Doe</li>
                                                                <li>Amara Sin</li>
                                                                <li>Sarah K.</li>
                                                                <li><span>20+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/heart.png"> Love</span>
                                                            <ul class="namelist">
                                                                <li>Amara Sin</li>
                                                                <li>Jhon Doe</li>
                                                                <li><span>10+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/smile.png"> Happy</span>
                                                            <ul class="namelist">
                                                                <li>Sarah K.</li>
                                                                <li>Jhon Doe</li>
                                                                <li>Amara Sin</li>
                                                                <li><span>100+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/weep.png"> Dislike</span>
                                                            <ul class="namelist">
                                                                <li>Danial Carbal</li>
                                                                <li>Amara Sin</li>
                                                                <li>Sarah K.</li>
                                                                <li><span>15+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>10+</p>
                                                </div>
                                                <div class="new-comment" style="display: none;">
                                                    <form method="post">
                                                        <input type="text" placeholder="write comment">
                                                        <button type="submit"><i class="icofont-paper-plane"></i></button>
                                                    </form>
                                                    <div class="comments-area">
                                                        <ul>
                                                            <li>
                                                                <figure><img alt="" src="images/resources/user1.jpg"></figure>
                                                                <div class="commenter">
                                                                    <h5><a title="" href="#">Jack Carter</a></h5>
                                                                    <span>2 hours ago</span>
                                                                    <p>
                                                                        i think that some how, we learn who we really are and then live with that decision, great post!
                                                                    </p>
                                                                    <span>you can view the more detail via link</span>
                                                                    <a title="" href="https://www.youtube.com/watch?v=HpZgwHU1GcI" target="_blank">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
                                                                </div>
                                                                <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                            </li>
                                                            <li>
                                                                <figure><img alt="" src="images/resources/user2.jpg"></figure>
                                                                <div class="commenter">
                                                                    <h5><a title="" href="#">Ching xang</a></h5>
                                                                    <span>2 hours ago</span>
                                                                    <p>
                                                                        i think that some how, we learn who we really are and then live with that decision, great post!
                                                                    </p>
                                                                </div>
                                                                <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- share audio post -->
                            <div class="main-wraper">
                                <div class="user-post">
                                    <div class="friend-info">
                                        <figure>
                                            <em>
                                                <svg style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                                    <path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path>
                                                </svg></em>
                                            <img alt="" src="images/resources/user6.jpg">
                                        </figure>
                                        <div class="friend-name">
                                            <div class="more">
                                                <div class="more-post-optns">
                                                    <i class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></i>
                                                    <ul>
                                                        <li>
                                                            <i class="icofont-pen-alt-1"></i>Edit Post
                                                            <span>Edit This Post within a Hour</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-ban"></i>Hide Post
                                                            <span>Hide This Post</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-ui-delete"></i>Delete Post
                                                            <span>If inappropriate Post By Mistake</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-flag"></i>Report
                                                            <span>Inappropriate content</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ins>
                                                <a title="verified" href="profile.php">Elie Honey</a> Podcast</ins>
                                            <span><i class="icofont-globe"></i> published: Sep,15 2020</span>
                                        </div>
                                        <div class="post-meta">
                                            <a href="post_detail.php" class="post-title">Supervision as a Personnel Development Device</a>
                                            <p>
                                                                                            </p>
                                            <div class="aud-vid">
                                                <div class="video-player">
                                                    <iframe
                                                        src="https://www.youtube.com/embed/RBfJR4oRC0k?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                                                        allowfullscreen
                                                        allow="autoplay"></iframe>
                                                </div>
                                            </div>
                                            <div class="we-video-info">
                                                <ul>
                                                    <li>
                                                        <span title="views" class="views">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                    <circle cx="12" cy="12" r="3"></circle>
                                                                </svg></i>
                                                            <ins>1.2k</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span title="Comments" class="Recommend">
                                                            <i>
                                                                <svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                                                </svg></i>
                                                            <ins>54</ins>
                                                        </span>

                                                    </li>
                                                    <li>
                                                        <span title="follow" class="Follow">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg></i>
                                                            <ins>5k</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="share-pst" title="Share">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2">
                                                                    <circle cx="18" cy="5" r="3"></circle>
                                                                    <circle cx="6" cy="12" r="3"></circle>
                                                                    <circle cx="18" cy="19" r="3"></circle>
                                                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                                </svg></i>
                                                            <ins>205</ins>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <a href="post_detail.php" title="" class="reply">Reply <i class="icofont-reply"></i></a>
                                            </div>
                                            <div class="stat-tools">
                                                <div class="box">
                                                    <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
                                                        <div class="Emojis">
                                                            <div class="Emoji Emoji--like">
                                                                <div class="icon icon--like"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--love">
                                                                <div class="icon icon--heart"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--haha">
                                                                <div class="icon icon--haha"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--wow">
                                                                <div class="icon icon--wow"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--sad">
                                                                <div class="icon icon--sad"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--angry">
                                                                <div class="icon icon--angry"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box">
                                                    <div class="Emojis">
                                                        <div class="Emoji Emoji--like">
                                                            <div class="icon icon--like"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--love">
                                                            <div class="icon icon--heart"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--haha">
                                                            <div class="icon icon--haha"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--wow">
                                                            <div class="icon icon--wow"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--sad">
                                                            <div class="icon icon--sad"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--angry">
                                                            <div class="icon icon--angry"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
                                                <a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
                                                <div class="emoji-state">
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/thumb.png"> Likes</span>
                                                            <ul class="namelist">
                                                                <li>Jhon Doe</li>
                                                                <li>Amara Sin</li>
                                                                <li>Sarah K.</li>
                                                                <li><span>20+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/heart.png"> Love</span>
                                                            <ul class="namelist">
                                                                <li>Amara Sin</li>
                                                                <li>Jhon Doe</li>
                                                                <li><span>10+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/smile.png"> Happy</span>
                                                            <ul class="namelist">
                                                                <li>Sarah K.</li>
                                                                <li>Jhon Doe</li>
                                                                <li>Amara Sin</li>
                                                                <li><span>100+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/weep.png"> Dislike</span>
                                                            <ul class="namelist">
                                                                <li>Danial Carbal</li>
                                                                <li>Amara Sin</li>
                                                                <li>Sarah K.</li>
                                                                <li><span>15+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>10+</p>
                                                </div>
                                                <div class="new-comment" style="display: none;">
                                                    <form method="post">
                                                        <input type="text" placeholder="write comment">
                                                        <button type="submit"><i class="icofont-paper-plane"></i></button>
                                                    </form>
                                                    <div class="comments-area">
                                                        <ul>
                                                            <li>
                                                                <figure><img alt="" src="images/resources/user1.jpg"></figure>
                                                                <div class="commenter">
                                                                    <h5><a title="" href="#">Jack Carter</a></h5>
                                                                    <span>2 hours ago</span>
                                                                    <p>
                                                                        i think that some how, we learn who we really are and then live with that decision, great post!
                                                                    </p>
                                                                    <span>you can view the more detail via link</span>
                                                                    <a title="" href="https://www.youtube.com/watch?v=HpZgwHU1GcI" target="_blank">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
                                                                </div>
                                                                <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                            </li>
                                                            <li>
                                                                <figure><img alt="" src="images/resources/user2.jpg"></figure>
                                                                <div class="commenter">
                                                                    <h5><a title="" href="#">Ching xang</a></h5>
                                                                    <span>2 hours ago</span>
                                                                    <p>
                                                                        i think that some how, we learn who we really are and then live with that decision, great post!
                                                                    </p>
                                                                </div>
                                                                <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- share video post -->
                            <div class="main-wraper">
                                <div class="user-post">
                                    <div class="friend-info">
                                        <figure>
                                            <em>
                                                <svg style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                                    <path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path>
                                                </svg></em>
                                            <img alt="" src="images/resources/user1.jpg">
                                        </figure>
                                        <div class="friend-name">
                                            <div class="more">
                                                <div class="more-post-optns">
                                                    <i class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></i>
                                                    <ul>
                                                        <li>
                                                            <i class="icofont-pen-alt-1"></i>Edit Post
                                                            <span>Edit This Post within a Hour</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-ban"></i>Hide Post
                                                            <span>Hide This Post</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-ui-delete"></i>Delete Post
                                                            <span>If inappropriate Post By Mistake</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-flag"></i>Report
                                                            <span>Inappropriate content</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ins>
                                                <a title="verified" href="profile.php">Jack Carter</a> Share Post</ins>
                                            <span><i class="icofont-globe"></i> published: Sep,15 2020</span>
                                        </div>
                                        <div class="post-meta">
                                            <a href="post_detail.php" class="post-title">Supervision as a Personnel Development Device</a>
                                            <p>
                                              
                                            </p>
                                            <div class="we-video-info">
                                                <ul>
                                                    <li>
                                                        <span title="views" class="views">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                    <circle cx="12" cy="12" r="3"></circle>
                                                                </svg></i>
                                                            <ins>1.2k</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span title="Comments" class="Recommend">
                                                            <i>
                                                                <svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                                                </svg></i>
                                                            <ins>54</ins>
                                                        </span>

                                                    </li>
                                                    <li>
                                                        <span title="follow" class="Follow">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg></i>
                                                            <ins>5k</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="share-pst" title="Share">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2">
                                                                    <circle cx="18" cy="5" r="3"></circle>
                                                                    <circle cx="6" cy="12" r="3"></circle>
                                                                    <circle cx="18" cy="19" r="3"></circle>
                                                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                                </svg></i>
                                                            <ins>205</ins>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <a href="post_detail.php" title="" class="reply">Reply <i class="icofont-reply"></i></a>
                                            </div>
                                            <div class="stat-tools">
                                                <div class="box">
                                                    <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
                                                        <div class="Emojis">
                                                            <div class="Emoji Emoji--like">
                                                                <div class="icon icon--like"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--love">
                                                                <div class="icon icon--heart"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--haha">
                                                                <div class="icon icon--haha"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--wow">
                                                                <div class="icon icon--wow"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--sad">
                                                                <div class="icon icon--sad"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--angry">
                                                                <div class="icon icon--angry"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box">
                                                    <div class="Emojis">
                                                        <div class="Emoji Emoji--like">
                                                            <div class="icon icon--like"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--love">
                                                            <div class="icon icon--heart"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--haha">
                                                            <div class="icon icon--haha"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--wow">
                                                            <div class="icon icon--wow"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--sad">
                                                            <div class="icon icon--sad"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--angry">
                                                            <div class="icon icon--angry"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
                                                <a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
                                                <div class="emoji-state">
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/thumb.png"> Likes</span>
                                                            <ul class="namelist">
                                                                <li>Jhon Doe</li>
                                                                <li>Amara Sin</li>
                                                                <li>Sarah K.</li>
                                                                <li><span>20+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/heart.png"> Love</span>
                                                            <ul class="namelist">
                                                                <li>Amara Sin</li>
                                                                <li>Jhon Doe</li>
                                                                <li><span>10+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/smile.png"> Happy</span>
                                                            <ul class="namelist">
                                                                <li>Sarah K.</li>
                                                                <li>Jhon Doe</li>
                                                                <li>Amara Sin</li>
                                                                <li><span>100+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/weep.png"> Dislike</span>
                                                            <ul class="namelist">
                                                                <li>Danial Carbal</li>
                                                                <li>Amara Sin</li>
                                                                <li>Sarah K.</li>
                                                                <li><span>15+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>10+</p>
                                                </div>
                                                <div class="new-comment" style="display: none;">
                                                    <form method="post">
                                                        <input type="text" placeholder="write comment">
                                                        <button type="submit"><i class="icofont-paper-plane"></i></button>
                                                    </form>
                                                    <div class="comments-area">
                                                        <ul>
                                                            <li>
                                                                <figure><img alt="" src="images/resources/user1.jpg"></figure>
                                                                <div class="commenter">
                                                                    <h5><a title="" href="#">Jack Carter</a></h5>
                                                                    <span>2 hours ago</span>
                                                                    <p>
                                                                        i think that some how, we learn who we really are and then live with that decision, great post!
                                                                    </p>
                                                                    <span>you can view the more detail via link</span>
                                                                    <a title="" href="https://www.youtube.com/watch?v=HpZgwHU1GcI" target="_blank">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
                                                                </div>
                                                                <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                            </li>
                                                            <li>
                                                                <figure><img alt="" src="images/resources/user2.jpg"></figure>
                                                                <div class="commenter">
                                                                    <h5><a title="" href="#">Ching xang</a></h5>
                                                                    <span>2 hours ago</span>
                                                                    <p>
                                                                        i think that some how, we learn who we really are and then live with that decision, great post!
                                                                    </p>
                                                                </div>
                                                                <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- share post without image -->
                            
                           
                            <div class="main-wraper">
                                <div class="user-post">
                                    <div class="friend-info">
                                        <figure>
                                            <em>
                                                <svg style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                                    <path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path>
                                                </svg></em>
                                            <img alt="" src="images/resources/user3.jpg">
                                        </figure>
                                        <div class="friend-name">
                                            <div class="more">
                                                <div class="more-post-optns">
                                                    <i class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></i>
                                                    <ul>
                                                        <li>
                                                            <i class="icofont-pen-alt-1"></i>Edit Post
                                                            <span>Edit This Post within a Hour</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-ban"></i>Hide Post
                                                            <span>Hide This Post</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-ui-delete"></i>Delete Post
                                                            <span>If inappropriate Post By Mistake</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-flag"></i>Report
                                                            <span>Inappropriate content</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ins><a title="" href="profile.php">Turgut Alp</a> Create Post</ins>
                                            <span><i class="icofont-globe"></i> published: Sep,15 2020</span>
                                        </div>
                                        <div class="post-meta">
                                            <figure>
                                                <a data-toggle="modal" data-target="#img-comt" href="images/resources/album1.jpg">
                                                    <img src="images/resources/study.jpg" alt="">
                                                </a>
                                            </figure>
                                            <a href="post_detail.php" class="post-title">Supervision as a Personnel Development Device</a>
                                            <p>
                                               
                                            </p>
                                            <div class="we-video-info">
                                                <ul>
                                                    <li>
                                                        <span title="views" class="views">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                    <circle cx="12" cy="12" r="3"></circle>
                                                                </svg></i>
                                                            <ins>1.2k</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span title="Comments" class="Recommend">
                                                            <i>
                                                                <svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                                                </svg></i>
                                                            <ins>54</ins>
                                                        </span>

                                                    </li>
                                                    <li>
                                                        <span title="follow" class="Follow">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg></i>
                                                            <ins>5k</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="share-pst" title="Share">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2">
                                                                    <circle cx="18" cy="5" r="3"></circle>
                                                                    <circle cx="6" cy="12" r="3"></circle>
                                                                    <circle cx="18" cy="19" r="3"></circle>
                                                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                                </svg></i>
                                                            <ins>205</ins>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <a href="post_detail.php" title="" class="reply">Reply <i class="icofont-reply"></i></a>
                                            </div>
                                            <div class="stat-tools">
                                                <div class="box">
                                                    <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
                                                        <div class="Emojis">
                                                            <div class="Emoji Emoji--like">
                                                                <div class="icon icon--like"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--love">
                                                                <div class="icon icon--heart"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--haha">
                                                                <div class="icon icon--haha"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--wow">
                                                                <div class="icon icon--wow"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--sad">
                                                                <div class="icon icon--sad"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--angry">
                                                                <div class="icon icon--angry"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box">
                                                    <div class="Emojis">
                                                        <div class="Emoji Emoji--like">
                                                            <div class="icon icon--like"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--love">
                                                            <div class="icon icon--heart"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--haha">
                                                            <div class="icon icon--haha"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--wow">
                                                            <div class="icon icon--wow"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--sad">
                                                            <div class="icon icon--sad"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--angry">
                                                            <div class="icon icon--angry"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
                                                <a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
                                                <div class="emoji-state">
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/thumb.png"> Likes</span>
                                                            <ul class="namelist">
                                                                <li>Jhon Doe</li>
                                                                <li>Amara Sin</li>
                                                                <li>Sarah K.</li>
                                                                <li><span>20+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/heart.png"> Love</span>
                                                            <ul class="namelist">
                                                                <li>Amara Sin</li>
                                                                <li>Jhon Doe</li>
                                                                <li><span>10+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/smile.png"> Happy</span>
                                                            <ul class="namelist">
                                                                <li>Sarah K.</li>
                                                                <li>Jhon Doe</li>
                                                                <li>Amara Sin</li>
                                                                <li><span>100+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/weep.png"> Dislike</span>
                                                            <ul class="namelist">
                                                                <li>Danial Carbal</li>
                                                                <li>Amara Sin</li>
                                                                <li>Sarah K.</li>
                                                                <li><span>15+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>30+</p>
                                                </div>
                                                <div class="new-comment" style="display: none;">
                                                    <form method="post">
                                                        <input type="text" placeholder="write comment">
                                                        <button type="submit"><i class="icofont-paper-plane"></i></button>
                                                    </form>
                                                    <div class="comments-area">
                                                        <ul>
                                                            <li>
                                                                <figure><img alt="" src="images/resources/user1.jpg"></figure>
                                                                <div class="commenter">
                                                                    <h5><a title="" href="#">Jack Carter</a></h5>
                                                                    <span>2 hours ago</span>
                                                                    <p>
                                                                        i think that some how, we learn who we really are and then live with that decision, great post!
                                                                    </p>
                                                                    <span>you can view the more detail via link</span>
                                                                    <a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
                                                                </div>
                                                                <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                            </li>
                                                            <li>
                                                                <figure><img alt="" src="images/resources/user2.jpg"></figure>
                                                                <div class="commenter">
                                                                    <h5><a title="" href="#">Ching xang</a></h5>
                                                                    <span>2 hours ago</span>
                                                                    <p>
                                                                        i think that some how, we learn who we really are and then live with that decision, great post!
                                                                    </p>
                                                                </div>
                                                                <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- share image with post -->
                            <div class="main-wraper">
                                <div class="user-post">
                                    <div class="friend-info">
                                        <figure>
                                            <em>
                                                <svg style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                                    <path fill="#82828e" stroke="#82828e" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path>
                                                </svg></em>
                                            <img alt="" src="images/resources/user4.jpg">
                                        </figure>
                                        <div class="friend-name">
                                            <div class="more">
                                                <div class="more-post-optns">
                                                    <i class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></i>
                                                    <ul>
                                                        <li>
                                                            <i class="icofont-pen-alt-1"></i>Edit Post
                                                            <span>Edit This Post within a Hour</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-ban"></i>Hide Post
                                                            <span>Hide This Post</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-ui-delete"></i>Delete Post
                                                            <span>If inappropriate Post By Mistake</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-flag"></i>Report
                                                            <span>Inappropriate content</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ins><a title="" href="profile.php">Saim turan</a> added image album</ins>
                                            <span><i class="icofont-globe"></i> published: Sep,15 2020</span>
                                        </div>
                                        <div class="post-meta">
                                            <figure>
                                                <div class="img-bunch">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <figure>
                                                                <a data-toggle="modal" data-target="#img-comt" href="images/resources/album1.jpg">
                                                                    <img src="images/resources/album1.jpg" alt="">
                                                                </a>
                                                            </figure>
                                                            <figure>
                                                                <a data-toggle="modal" data-target="#img-comt" href="images/resources/album2.jpg"><img src="images/resources/album2.jpg" alt="">
                                                                </a>
                                                            </figure>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <figure>
                                                                <a data-toggle="modal" data-target="#img-comt" href="images/resources/album6.jpg"><img src="images/resources/album6.jpg" alt="">
                                                                </a>
                                                            </figure>
                                                            <figure>
                                                                <a data-toggle="modal" data-target="#img-comt" href="images/resources/album5.jpg"><img src="images/resources/album5.jpg" alt="">
                                                                </a>
                                                            </figure>
                                                            <figure>
                                                                <a data-toggle="modal" data-target="#img-comt" href="images/resources/album4.jpg"><img src="images/resources/album4.jpg" alt="">
                                                                </a>
                                                                <div class="more-photos">
                                                                    <span>+15</span>
                                                                </div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                            <a href="post_detail.php" class="post-title">Supervision as a Personnel Development Device</a>
                                            <p>
                                               
                                            </p>
                                            <div class="we-video-info">
                                                <ul>
                                                    <li>
                                                        <span title="views" class="views">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                    <circle cx="12" cy="12" r="3"></circle>
                                                                </svg></i>
                                                            <ins>1.2k</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span title="Comments" class="Recommend">
                                                            <i>
                                                                <svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                                                </svg></i>
                                                            <ins>54</ins>
                                                        </span>

                                                    </li>
                                                    <li>
                                                        <span title="follow" class="Follow">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg></i>
                                                            <ins>5k</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="share-pst" title="Share">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2">
                                                                    <circle cx="18" cy="5" r="3"></circle>
                                                                    <circle cx="6" cy="12" r="3"></circle>
                                                                    <circle cx="18" cy="19" r="3"></circle>
                                                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                                </svg></i>
                                                            <ins>205</ins>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <a href="post_detail.php" title="" class="reply">Reply <i class="icofont-reply"></i></a>
                                            </div>
                                            <div class="stat-tools">
                                                <div class="box">
                                                    <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
                                                        <div class="Emojis">
                                                            <div class="Emoji Emoji--like">
                                                                <div class="icon icon--like"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--love">
                                                                <div class="icon icon--heart"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--haha">
                                                                <div class="icon icon--haha"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--wow">
                                                                <div class="icon icon--wow"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--sad">
                                                                <div class="icon icon--sad"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--angry">
                                                                <div class="icon icon--angry"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box">
                                                    <div class="Emojis">
                                                        <div class="Emoji Emoji--like">
                                                            <div class="icon icon--like"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--love">
                                                            <div class="icon icon--heart"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--haha">
                                                            <div class="icon icon--haha"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--wow">
                                                            <div class="icon icon--wow"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--sad">
                                                            <div class="icon icon--sad"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--angry">
                                                            <div class="icon icon--angry"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
                                                <a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
                                                <div class="emoji-state">
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/thumb.png"> Likes</span>
                                                            <ul class="namelist">
                                                                <li>Jhon Doe</li>
                                                                <li>Amara Sin</li>
                                                                <li>Sarah K.</li>
                                                                <li><span>20+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/heart.png"> Love</span>
                                                            <ul class="namelist">
                                                                <li>Amara Sin</li>
                                                                <li>Jhon Doe</li>
                                                                <li><span>10+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/smile.png"> Happy</span>
                                                            <ul class="namelist">
                                                                <li>Sarah K.</li>
                                                                <li>Jhon Doe</li>
                                                                <li>Amara Sin</li>
                                                                <li><span>100+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/weep.png"> Dislike</span>
                                                            <ul class="namelist">
                                                                <li>Danial Carbal</li>
                                                                <li>Amara Sin</li>
                                                                <li>Sarah K.</li>
                                                                <li><span>15+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>50+</p>
                                                </div>
                                                <div class="new-comment" style="display: none;">
                                                    <form method="post">
                                                        <input type="text" placeholder="write comment">
                                                        <button type="submit"><i class="icofont-paper-plane"></i></button>
                                                    </form>
                                                    <div class="comments-area">
                                                        <ul>
                                                            <li>
                                                                <figure><img alt="" src="images/resources/user1.jpg"></figure>
                                                                <div class="commenter">
                                                                    <h5><a title="" href="#">Jack Carter</a></h5>
                                                                    <span>2 hours ago</span>
                                                                    <p>
                                                                        i think that some how, we learn who we really are and then live with that decision, great post!
                                                                    </p>
                                                                    <span>you can view the more detail via link</span>
                                                                    <a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
                                                                </div>
                                                                <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                            </li>
                                                            <li>
                                                                <figure><img alt="" src="images/resources/user2.jpg"></figure>
                                                                <div class="commenter">
                                                                    <h5><a title="" href="#">Ching xang</a></h5>
                                                                    <span>2 hours ago</span>
                                                                    <p>
                                                                        i think that some how, we learn who we really are and then live with that decision, great post!
                                                                    </p>
                                                                </div>
                                                                <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- share image album -->
                           
                            <div class="main-wraper">
                                <div class="user-post">
                                    <div class="friend-info">
                                        <figure>
                                            <em>
                                                <svg style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                                    <path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path>
                                                </svg></em>
                                            <img alt="" src="images/resources/user2.jpg">
                                        </figure>
                                        <div class="friend-name">
                                            <div class="more">
                                                <div class="more-post-optns">
                                                    <i class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></i>
                                                    <ul>
                                                        <li>
                                                            <i class="icofont-pen-alt-1"></i>Edit Post
                                                            <span>Edit This Post within a Hour</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-ban"></i>Hide Post
                                                            <span>Hide This Post</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-ui-delete"></i>Delete Post
                                                            <span>If inappropriate Post By Mistake</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont-flag"></i>Report
                                                            <span>Inappropriate content</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ins><a title="" href="profile.php">Maria k.</a> Shared Link</ins>
                                            <span><i class="icofont-globe"></i> published: Sep,15 2020</span>
                                        </div>
                                        <div class="post-meta">
                                            <em><a href="https://www.youtube.com/embed/zdow47FQRfQ" title="" target="_blank">https://www.youtube.com/embed/zdow47FQRfQ</a>
                                            </em>
                                            <iframe height="285" src="https://www.youtube.com/embed/zdow47FQRfQ" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                            <p>
                                                Cookie? Biscuit? They all mean the same thing! Our lovely English teachers will quickly show you some pronunciation and vocabulary differences from Australia, America, and England!
                                            </p>
                                            <div class="we-video-info">
                                                <ul>
                                                    <li>
                                                        <span title="views" class="views">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                    <circle cx="12" cy="12" r="3"></circle>
                                                                </svg></i>
                                                            <ins>1.2k</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span title="Comments" class="Recommend">
                                                            <i>
                                                                <svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                                                </svg></i>
                                                            <ins>54</ins>
                                                        </span>

                                                    </li>
                                                    <li>
                                                        <span title="follow" class="Follow">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                                </svg></i>
                                                            <ins>5k</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="share-pst" title="Share">
                                                            <i>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2">
                                                                    <circle cx="18" cy="5" r="3"></circle>
                                                                    <circle cx="6" cy="12" r="3"></circle>
                                                                    <circle cx="18" cy="19" r="3"></circle>
                                                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                                </svg></i>
                                                            <ins>205</ins>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <a href="post_detail.php" title="" class="reply">Reply <i class="icofont-reply"></i></a>
                                            </div>
                                            <div class="stat-tools">
                                                <div class="box">
                                                    <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
                                                        <div class="Emojis">
                                                            <div class="Emoji Emoji--like">
                                                                <div class="icon icon--like"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--love">
                                                                <div class="icon icon--heart"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--haha">
                                                                <div class="icon icon--haha"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--wow">
                                                                <div class="icon icon--wow"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--sad">
                                                                <div class="icon icon--sad"></div>
                                                            </div>
                                                            <div class="Emoji Emoji--angry">
                                                                <div class="icon icon--angry"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box">
                                                    <div class="Emojis">
                                                        <div class="Emoji Emoji--like">
                                                            <div class="icon icon--like"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--love">
                                                            <div class="icon icon--heart"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--haha">
                                                            <div class="icon icon--haha"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--wow">
                                                            <div class="icon icon--wow"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--sad">
                                                            <div class="icon icon--sad"></div>
                                                        </div>
                                                        <div class="Emoji Emoji--angry">
                                                            <div class="icon icon--angry"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
                                                <a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
                                                <div class="emoji-state">
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/thumb.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/thumb.png"> Likes</span>
                                                            <ul class="namelist">
                                                                <li>Jhon Doe</li>
                                                                <li>Amara Sin</li>
                                                                <li>Sarah K.</li>
                                                                <li><span>20+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/heart.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/heart.png"> Love</span>
                                                            <ul class="namelist">
                                                                <li>Amara Sin</li>
                                                                <li>Jhon Doe</li>
                                                                <li><span>10+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/smile.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/smile.png"> Happy</span>
                                                            <ul class="namelist">
                                                                <li>Sarah K.</li>
                                                                <li>Jhon Doe</li>
                                                                <li>Amara Sin</li>
                                                                <li><span>100+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="popover_wrapper">
                                                        <a class="popover_title" href="#" title=""><img alt="" src="images/smiles/weep.png"></a>
                                                        <div class="popover_content">
                                                            <span><img alt="" src="images/smiles/weep.png"> Dislike</span>
                                                            <ul class="namelist">
                                                                <li>Danial Carbal</li>
                                                                <li>Amara Sin</li>
                                                                <li>Sarah K.</li>
                                                                <li><span>15+ more</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>20+</p>
                                                </div>
                                                <div class="new-comment" style="display: none;">
                                                    <form method="post">
                                                        <input type="text" placeholder="write comment">
                                                        <button type="submit"><i class="icofont-paper-plane"></i></button>
                                                    </form>
                                                    <div class="comments-area">
                                                        <ul>
                                                            <li>
                                                                <figure><img alt="" src="images/resources/user1.jpg"></figure>
                                                                <div class="commenter">
                                                                    <h5><a title="" href="#">Jack Carter</a></h5>
                                                                    <span>2 hours ago</span>
                                                                    <p>
                                                                        i think that some how, we learn who we really are and then live with that decision, great post!
                                                                    </p>
                                                                    <span>you can view the more detail via link</span>
                                                                    <a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
                                                                </div>
                                                                <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                            </li>
                                                            <li>
                                                                <figure><img alt="" src="images/resources/user2.jpg"></figure>
                                                                <div class="commenter">
                                                                    <h5><a title="" href="#">Ching xang</a></h5>
                                                                    <span>2 hours ago</span>
                                                                    <p>
                                                                        i think that some how, we learn who we really are and then live with that decision, great post!
                                                                    </p>
                                                                </div>
                                                                <a title="Like" href="#"><i class="icofont-heart"></i></a>
                                                                <a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- share video -->
                           
                            

                            <div class="loadmore">
                                <div class="sp sp-bars"></div>
                                <a href="#" title="" data-ripple="">Load More..</a>
                            </div><!-- loadmore buttons -->
                        </div>
                        <div class="col-lg-3">
                            <aside class="sidebar static right">
                                <div class="widget">
                                    <h4 class="widget-title">Your Groups</h4>
                                    <ul class="ak-groups">
                                        <li>
                                            <figure><img src="images/resources/your-group1.jpg" alt=""></figure>
                                            <div class="your-grp">
                                                <h5><a href="group_detail.php" title="">Good Group</a></h5>
                                                <a href="#" title=""><i class="icofont-bell-alt"></i>Notifilactions <span>13</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="images/resources/your-group2.jpg" alt=""></figure>
                                            <div class="your-grp">
                                                <h5><a href="group_detail.php" title="">E-course Group</a></h5>
                                                <a href="#" title=""><i class="icofont-bell-alt"></i>Notifilactions <span>13</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- Your groups -->
                                <div class="widget">
                                    <h4 class="widget-title">Suggested Group</h4>
                                    <div class="sug-caro">
                                        <div class="friend-box">
                                            <figure>
                                                <img alt="" src="images/resources/sidebar-info.jpg">
                                                <span>Members: 505K</span>
                                            </figure>
                                            <div class="frnd-meta">
                                                <img alt="" src="images/resources/frnd-figure2.jpg">
                                                <div class="frnd-name">
                                                    <a title="" href="#">Social Research</a>
                                                    <span>@biolabest</span>

                                                </div>
                                                <a class="main-btn2" href="#" title="">Join Community</a>
                                            </div>
                                        </div>
                                        <div class="friend-box">
                                            <figure>
                                                <img alt="" src="images/resources/sidebar-info2.jpg">
                                                <span>Members: 505K</span>
                                            </figure>
                                            <div class="frnd-meta">
                                                <img alt="" src="images/resources/frnd-figure3.jpg">
                                                <div class="frnd-name">
                                                    <a title="" href="#">Bio Labest Group</a>
                                                    <span>@biolabest</span>

                                                </div>
                                                <a class="main-btn2" href="#" title="">Join Community</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- suggested group -->
                               
                                <div class="widget">
                                    <h4 class="widget-title">Explor Events <a class="see-all" href="event.php" title="">See All</a></h4>
                                    <div class="rec-events bg-purple">
                                        <i class="icofont-gift"></i>
                                        <h6><a title="" href="event_detail.php">BZ University good night event in columbia</a></h6>
                                        <img alt="" src="images/clock.png">
                                    </div>
                                    <div class="rec-events bg-blue">
                                        <i class="icofont-microphone"></i>
                                        <h6><a title="" href="event_detail.php">The 3rd International Conference 2020</a></h6>
                                        <img alt="" src="images/clock.png">
                                    </div>
                                </div><!-- event widget -->
                              
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- content -->
<script>
        function updateClock() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            document.getElementById('hours').textContent = `${hours}`;
            document.getElementById('min').textContent = `${minutes}`;
            //document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;


        }

        setInterval(updateClock, 1000); // Update every second
        updateClock(); // Initial call to display the clock immediately
    </script>
<?php
include "footer.php";
?>
		