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
										<div class="widget stick-widget ">
											<h4 class="widget-title">Watch</h4>
											<form class="video-search" method="post">
												<i class="">
													<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
														viewBox="0 0 24 24" fill="none" stroke="currentColor"
														stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
														class="feather feather-search">
														<circle cx="11" cy="11" r="8"></circle>
														<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
													</svg></i>
												<input type="text" placeholder="Search Video">
												<button type="submit"></button>
											</form>
											<ul class="video-links">
												<li>
													<a href="#" title=""><i class=""><svg class="feather feather-home"
																stroke-linejoin="round" stroke-linecap="round"
																stroke-width="2" stroke="currentColor" fill="none"
																viewBox="0 0 24 24" height="18" width="18"
																xmlns="http://www.w3.org/2000/svg">
																<path
																	d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
																<polyline points="9 22 9 12 15 12 15 22" />
															</svg></i> Home</a>
												</li>
												<li>
													<a href="#" title=""><i class=""><svg
																xmlns="http://www.w3.org/2000/svg" width="18"
																height="18" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="2"
																stroke-linecap="round" stroke-linejoin="round"
																class="feather feather-youtube">
																<path
																	d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z" />
																<polygon
																	points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" />
															</svg></i> Latest</a>
												</li>
												<li>
													<a href="#" title=""><i class=""><svg class="feather feather-zap"
																stroke-linejoin="round" stroke-linecap="round"
																stroke-width="2" stroke="currentColor" fill="none"
																viewBox="0 0 24 24" height="18" width="18"
																xmlns="http://www.w3.org/2000/svg">
																<polygon
																	points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
															</svg></i> Trending</a>
												</li>
												<li>
													<a href="#" title=""><i class="">
															<svg xmlns="http://www.w3.org/2000/svg" width="18"
																height="18" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="2"
																stroke-linecap="round" stroke-linejoin="round"
																class="feather feather-mic">
																<path
																	d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z">
																</path>
																<path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
																<line x1="12" y1="19" x2="12" y2="23"></line>
																<line x1="8" y1="23" x2="16" y2="23"></line>
															</svg></i> Live</a>
												</li>
												<li>
													<a href="#" title=""><i class="">
															<svg xmlns="http://www.w3.org/2000/svg" width="18"
																height="18" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="2"
																stroke-linecap="round" stroke-linejoin="round"
																class="feather feather-save">
																<path
																	d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z">
																</path>
																<polyline points="17 21 17 13 7 13 7 21"></polyline>
																<polyline points="7 3 7 8 15 8"></polyline>
															</svg></i> Saved Videos</a>
												</li>
											</ul>
											<h4 class="main-title"><i class="">
													<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
														viewBox="0 0 24 24" fill="none" stroke="currentColor"
														stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
														class="feather feather-list">
														<line x1="8" y1="6" x2="21" y2="6"></line>
														<line x1="8" y1="12" x2="21" y2="12"></line>
														<line x1="8" y1="18" x2="21" y2="18"></line>
														<line x1="3" y1="6" x2="3.01" y2="6"></line>
														<line x1="3" y1="12" x2="3.01" y2="12"></line>
														<line x1="3" y1="18" x2="3.01" y2="18"></line>
													</svg></i> Your Watch List</h4>
											<ul class="watchlist">
												<li class="unread">
													<figure><img src="images/resources/user2.jpg" alt=""></figure>
													<a href="#" title="">Rosie Garebal</a>
													<span class="new-highlight"></span>
												</li>
												<li>
													<figure><img src="images/resources/user3.jpg" alt=""></figure>
													<a href="#" title="">Danial Cabral</a>
													<span class="new-highlight"></span>
												</li>
												<li class="unread">
													<figure><img src="images/resources/user4.jpg" alt=""></figure>
													<a href="#" title="">William John</a>
													<span class="new-highlight"></span>
												</li>
												<li>
													<figure><img src="images/resources/user5.jpg" alt=""></figure>
													<a href="#" title="">Adrew Jane</a>
													<span class="new-highlight"></span>
												</li>
												
											</ul>
										</div>
									</aside>
								</div>
								<div class="col-lg-9">
									<div class="main-wraper">
										<div class="main-title">Latest Videos</div>
										<div class="main-wraper">
											<div class="user-post video">
												<div class="friend-info">
													<figure>
														<img alt="" src="images/resources/user1.jpg">
													</figure>
													<div class="friend-name">
														<div class="more">
															<div class="more-post-optns">
																<i class="">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
																		height="24" viewBox="0 0 24 24" fill="none"
																		stroke="currentColor" stroke-width="2"
																		stroke-linecap="round" stroke-linejoin="round"
																		class="feather feather-more-horizontal">
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
														<ins><a title="" href="profile.php">Jack Carter</a> Upload
															video <em><a class="folow" href="#"
																	title="">Follow</a></em></ins>
														<span><i class="icofont-globe"></i> published: Sep,15
															2020</span>
													</div>
													<div class="post-meta">
														<h4>When your private pictures are used against you</h4>
														<p>A film about a secret of a housewife which is revealed on her
															3rd Wedding Anniversary</p>
														<iframe height="400"
															src="https://www.youtube.com/embed/zdow47FQRfQ"
															allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
															allowfullscreen></iframe>
														<div class="we-video-info">
															<ul>
																<li>
																	<span title="views" class="views">
																		<i>
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="16" height="16"
																				viewBox="0 0 24 24" fill="none"
																				stroke="currentColor" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																				class="feather feather-eye">
																				<path
																					d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
																				</path>
																				<circle cx="12" cy="12" r="3"></circle>
																			</svg></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span title="Comments" class="Recommend">
																		<i>
																			<svg class="feather feather-message-square"
																				stroke-linejoin="round"
																				stroke-linecap="round" stroke-width="2"
																				stroke="currentColor" fill="none"
																				viewBox="0 0 24 24" height="16"
																				width="16"
																				xmlns="http://www.w3.org/2000/svg">
																				<path
																					d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
																			</svg></i>
																		<ins>54</ins>
																	</span>

																</li>
																<li>
																	<span title="follow" class="Follow">
																		<i>
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="16" height="16"
																				viewBox="0 0 24 24" fill="none"
																				stroke="currentColor" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																				class="feather feather-star">
																				<polygon
																					points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
																				</polygon>
																			</svg></i>
																		<ins>5k</ins>
																	</span>
																</li>
																<li>
																	<span class="share-pst" title="Share">
																		<i>
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="16" height="16"
																				viewBox="0 0 24 24" fill="none"
																				stroke="currentColor" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																				class="feather feather-share-2">
																				<circle cx="18" cy="5" r="3"></circle>
																				<circle cx="6" cy="12" r="3"></circle>
																				<circle cx="18" cy="19" r="3"></circle>
																				<line x1="8.59" y1="13.51" x2="15.42"
																					y2="17.49"></line>
																				<line x1="15.41" y1="6.51" x2="8.59"
																					y2="10.49"></line>
																			</svg></i>
																		<ins>205</ins>
																	</span>
																</li>
															</ul>
															<a href="post-detail.html" title="" class="reply">Reply <i
																	class="icofont-reply"></i></a>
														</div>
														<div class="stat-tools">
															<div class="box">
																<div class="Like"><a class="Like__link"><i
																			class="icofont-like"></i> Like</a>
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
															<a title="" href="#" class="comment-to"><i
																	class="icofont-comment"></i> Comment</a>
															<a title="" href="#" class="share-to"><i
																	class="icofont-share-alt"></i> Share</a>
															<div class="emoji-state">
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img
																			alt="" src="images/smiles/thumb.png"></a>
																	<div class="popover_content">
																		<span><img alt="" src="images/smiles/thumb.png">
																			Likes</span>
																		<ul class="namelist">
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>20+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img
																			alt="" src="images/smiles/heart.png"></a>
																	<div class="popover_content">
																		<span><img alt="" src="images/smiles/heart.png">
																			Love</span>
																		<ul class="namelist">
																			<li>Amara Sin</li>
																			<li>Jhon Doe</li>
																			<li><span>10+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img
																			alt="" src="images/smiles/smile.png"></a>
																	<div class="popover_content">
																		<span><img alt="" src="images/smiles/smile.png">
																			Happy</span>
																		<ul class="namelist">
																			<li>Sarah K.</li>
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li><span>100+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img
																			alt="" src="images/smiles/weep.png"></a>
																	<div class="popover_content">
																		<span><img alt="" src="images/smiles/weep.png">
																			Dislike</span>
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
																	<button type="submit"><i
																			class="icofont-paper-plane"></i></button>
																</form>
																<div class="comments-area">
																	<ul>
																		<li>
																			<figure><img alt=""
																					src="images/resources/user1.jpg">
																			</figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Jack Carter</a>
																				</h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who
																					we really are and then live with
																					that decision, great post!
																				</p>
																				<span>you can view the more detail via
																					link</span>
																				<a title=""
																					href="https://www.youtube.com/watch?v=HpZgwHU1GcI"
																					target="_blank">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																			</div>
																			<a title="Like" href="#"><i
																					class="icofont-heart"></i></a>
																			<a title="Reply" href="#"
																				class="reply-coment"><i
																					class="icofont-reply"></i></a>
																		</li>
																		<li>
																			<figure><img alt=""
																					src="images/resources/user2.jpg">
																			</figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Ching xang</a>
																				</h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who
																					we really are and then live with
																					that decision, great post!

																				</p>
																			</div>
																			<a title="Like" href="#"><i
																					class="icofont-heart"></i></a>
																			<a title="Reply" href="#"
																				class="reply-coment"><i
																					class="icofont-reply"></i></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- share youtube video -->
										<div class="main-wraper">
											<div class="user-post video">
												<div class="friend-info">
													<figure>
														<img alt="" src="images/resources/user2.jpg">
													</figure>
													<div class="friend-name">
														<div class="more">
															<div class="more-post-optns">
																<i class="">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
																		height="24" viewBox="0 0 24 24" fill="none"
																		stroke="currentColor" stroke-width="2"
																		stroke-linecap="round" stroke-linejoin="round"
																		class="feather feather-more-horizontal">
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
														<ins><a title="" href="profile.php">Farhea</a> Shared Vimeo
															Link <em><a href="#" title="">Follow</a></em></ins>
														<span><i class="icofont-globe"></i> published: Sep,15
															2020</span>
													</div>
													<div class="post-meta">
														<h4>Hypoglycemia | Endocrinology Medicine Lectures | Medical
															Online Education | V-Learning</h4>
														<p>A film about a secret of a housewife which is revealed on her
															3rd Wedding Anniversary</p>
														<iframe src="https://player.vimeo.com/video/464733913"
															height="350" allow="autoplay; fullscreen"
															allowfullscreen></iframe>
														<div class="we-video-info">
															<ul>
																<li>
																	<span title="views" class="views">
																		<i>
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="16" height="16"
																				viewBox="0 0 24 24" fill="none"
																				stroke="currentColor" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																				class="feather feather-eye">
																				<path
																					d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
																				</path>
																				<circle cx="12" cy="12" r="3"></circle>
																			</svg></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span title="Comments" class="Recommend">
																		<i>
																			<svg class="feather feather-message-square"
																				stroke-linejoin="round"
																				stroke-linecap="round" stroke-width="2"
																				stroke="currentColor" fill="none"
																				viewBox="0 0 24 24" height="16"
																				width="16"
																				xmlns="http://www.w3.org/2000/svg">
																				<path
																					d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
																			</svg></i>
																		<ins>54</ins>
																	</span>

																</li>
																<li>
																	<span title="follow" class="Follow">
																		<i>
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="16" height="16"
																				viewBox="0 0 24 24" fill="none"
																				stroke="currentColor" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																				class="feather feather-star">
																				<polygon
																					points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
																				</polygon>
																			</svg></i>
																		<ins>5k</ins>
																	</span>
																</li>
																<li>
																	<span class="share-pst" title="Share">
																		<i>
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="16" height="16"
																				viewBox="0 0 24 24" fill="none"
																				stroke="currentColor" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																				class="feather feather-share-2">
																				<circle cx="18" cy="5" r="3"></circle>
																				<circle cx="6" cy="12" r="3"></circle>
																				<circle cx="18" cy="19" r="3"></circle>
																				<line x1="8.59" y1="13.51" x2="15.42"
																					y2="17.49"></line>
																				<line x1="15.41" y1="6.51" x2="8.59"
																					y2="10.49"></line>
																			</svg></i>
																		<ins>205</ins>
																	</span>
																</li>
															</ul>
															<a href="post-detail.html" title="" class="reply">Reply <i
																	class="icofont-reply"></i></a>
														</div>
														<div class="stat-tools">
															<div class="box">
																<div class="Like"><a class="Like__link"><i
																			class="icofont-like"></i> Like</a>
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
															<a title="" href="#" class="comment-to"><i
																	class="icofont-comment"></i> Comment</a>
															<a title="" href="#" class="share-to"><i
																	class="icofont-share-alt"></i> Share</a>
															<div class="emoji-state">
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img
																			alt="" src="images/smiles/thumb.png"></a>
																	<div class="popover_content">
																		<span><img alt="" src="images/smiles/thumb.png">
																			Likes</span>
																		<ul class="namelist">
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>20+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img
																			alt="" src="images/smiles/heart.png"></a>
																	<div class="popover_content">
																		<span><img alt="" src="images/smiles/heart.png">
																			Love</span>
																		<ul class="namelist">
																			<li>Amara Sin</li>
																			<li>Jhon Doe</li>
																			<li><span>10+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img
																			alt="" src="images/smiles/smile.png"></a>
																	<div class="popover_content">
																		<span><img alt="" src="images/smiles/smile.png">
																			Happy</span>
																		<ul class="namelist">
																			<li>Sarah K.</li>
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li><span>100+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img
																			alt="" src="images/smiles/weep.png"></a>
																	<div class="popover_content">
																		<span><img alt="" src="images/smiles/weep.png">
																			Dislike</span>
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
																	<button type="submit"><i
																			class="icofont-paper-plane"></i></button>
																</form>
																<div class="comments-area">
																	<ul>
																		<li>
																			<figure><img alt=""
																					src="images/resources/user1.jpg">
																			</figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Jack Carter</a>
																				</h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who
																					we really are and then live with
																					that decision, great post!
																				</p>
																				<span>you can view the more detail via
																					link</span>
																				<a title=""
																					href="https://www.youtube.com/watch?v=HpZgwHU1GcI"
																					target="_blank">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																			</div>
																			<a title="Like" href="#"><i
																					class="icofont-heart"></i></a>
																			<a title="Reply" href="#"
																				class="reply-coment"><i
																					class="icofont-reply"></i></a>
																		</li>
																		<li>
																			<figure><img alt=""
																					src="images/resources/user2.jpg">
																			</figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Ching xang</a>
																				</h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who
																					we really are and then live with
																					that decision, great post!

																				</p>
																			</div>
																			<a title="Like" href="#"><i
																					class="icofont-heart"></i></a>
																			<a title="Reply" href="#"
																				class="reply-coment"><i
																					class="icofont-reply"></i></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- share vimeo video -->
										
										<div class="main-wraper">
											<div class="user-post video">
												<div class="friend-info">
													<figure>
														<img alt="" src="images/resources/user3.jpg">
													</figure>
													<div class="friend-name">
														<div class="more">
															<div class="more-post-optns">
																<i class="">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
																		height="24" viewBox="0 0 24 24" fill="none"
																		stroke="currentColor" stroke-width="2"
																		stroke-linecap="round" stroke-linejoin="round"
																		class="feather feather-more-horizontal">
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
														<ins><a title="" href="profile.php">Fawad Khanzada</a> Shared
															video <em><a href="#" title="">Follow</a></em></ins>
														<span><i class="icofont-globe"></i> published: Sep,15
															2020</span>
													</div>
													<div class="post-meta">
														<h4>After watching this, your brain will not be the same..</h4>
														<p>In a classic research-based TEDx Talk, Dr. Lara Boyd
															describes how neuroplasticity gives you the power to shape
															the brain you ...</p>
														<iframe height="400"
															src="https://www.youtube.com/embed/LNHBMFCzznE"
															allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
															allowfullscreen></iframe>
														<div class="we-video-info">
															<ul>
																<li>
																	<span title="views" class="views">
																		<i>
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="16" height="16"
																				viewBox="0 0 24 24" fill="none"
																				stroke="currentColor" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																				class="feather feather-eye">
																				<path
																					d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
																				</path>
																				<circle cx="12" cy="12" r="3"></circle>
																			</svg></i>
																		<ins>1.2k</ins>
																	</span>
																</li>
																<li>
																	<span title="Comments" class="Recommend">
																		<i>
																			<svg class="feather feather-message-square"
																				stroke-linejoin="round"
																				stroke-linecap="round" stroke-width="2"
																				stroke="currentColor" fill="none"
																				viewBox="0 0 24 24" height="16"
																				width="16"
																				xmlns="http://www.w3.org/2000/svg">
																				<path
																					d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
																			</svg></i>
																		<ins>54</ins>
																	</span>

																</li>
																<li>
																	<span title="follow" class="Follow">
																		<i>
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="16" height="16"
																				viewBox="0 0 24 24" fill="none"
																				stroke="currentColor" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																				class="feather feather-star">
																				<polygon
																					points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
																				</polygon>
																			</svg></i>
																		<ins>5k</ins>
																	</span>
																</li>
																<li>
																	<span class="share-pst" title="Share">
																		<i>
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="16" height="16"
																				viewBox="0 0 24 24" fill="none"
																				stroke="currentColor" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																				class="feather feather-share-2">
																				<circle cx="18" cy="5" r="3"></circle>
																				<circle cx="6" cy="12" r="3"></circle>
																				<circle cx="18" cy="19" r="3"></circle>
																				<line x1="8.59" y1="13.51" x2="15.42"
																					y2="17.49"></line>
																				<line x1="15.41" y1="6.51" x2="8.59"
																					y2="10.49"></line>
																			</svg></i>
																		<ins>205</ins>
																	</span>
																</li>
															</ul>
															<a href="post-detail.html" title="" class="reply">Reply <i
																	class="icofont-reply"></i></a>
														</div>
														<div class="stat-tools">
															<div class="box">
																<div class="Like"><a class="Like__link"><i
																			class="icofont-like"></i> Like</a>
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
															<a title="" href="#" class="comment-to"><i
																	class="icofont-comment"></i> Comment</a>
															<a title="" href="#" class="share-to"><i
																	class="icofont-share-alt"></i> Share</a>
															<div class="emoji-state">
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img
																			alt="" src="images/smiles/thumb.png"></a>
																	<div class="popover_content">
																		<span><img alt="" src="images/smiles/thumb.png">
																			Likes</span>
																		<ul class="namelist">
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li>Sarah K.</li>
																			<li><span>20+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img
																			alt="" src="images/smiles/heart.png"></a>
																	<div class="popover_content">
																		<span><img alt="" src="images/smiles/heart.png">
																			Love</span>
																		<ul class="namelist">
																			<li>Amara Sin</li>
																			<li>Jhon Doe</li>
																			<li><span>10+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img
																			alt="" src="images/smiles/smile.png"></a>
																	<div class="popover_content">
																		<span><img alt="" src="images/smiles/smile.png">
																			Happy</span>
																		<ul class="namelist">
																			<li>Sarah K.</li>
																			<li>Jhon Doe</li>
																			<li>Amara Sin</li>
																			<li><span>100+ more</span></li>
																		</ul>
																	</div>
																</div>
																<div class="popover_wrapper">
																	<a class="popover_title" href="#" title=""><img
																			alt="" src="images/smiles/weep.png"></a>
																	<div class="popover_content">
																		<span><img alt="" src="images/smiles/weep.png">
																			Dislike</span>
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
																	<button type="submit"><i
																			class="icofont-paper-plane"></i></button>
																</form>
																<div class="comments-area">
																	<ul>
																		<li>
																			<figure><img alt=""
																					src="images/resources/user1.jpg">
																			</figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Jack Carter</a>
																				</h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who
																					we really are and then live with
																					that decision, great post!
																				</p>
																				<span>you can view the more detail via
																					link</span>
																				<a title=""
																					href="https://www.youtube.com/watch?v=HpZgwHU1GcI"
																					target="_blank">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																			</div>
																			<a title="Like" href="#"><i
																					class="icofont-heart"></i></a>
																			<a title="Reply" href="#"
																				class="reply-coment"><i
																					class="icofont-reply"></i></a>
																		</li>
																		<li>
																			<figure><img alt=""
																					src="images/resources/user2.jpg">
																			</figure>
																			<div class="commenter">
																				<h5><a title="" href="#">Ching xang</a>
																				</h5>
																				<span>2 hours ago</span>
																				<p>
																					i think that some how, we learn who
																					we really are and then live with
																					that decision, great post!

																				</p>
																			</div>
																			<a title="Like" href="#"><i
																					class="icofont-heart"></i></a>
																			<a title="Reply" href="#"
																				class="reply-coment"><i
																					class="icofont-reply"></i></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- share youtube video -->

										<div class="sp sp-bars"></div><!-- LOADER INDICATOR -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
include "footer.php";
?>
		