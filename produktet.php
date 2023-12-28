<?php

include "inc/header.php";

?>



    <!--== Start Page Header Area ==-->
    <div class="page-header-wrap bg-img" data-bg="assets/img/bg/page-header-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="page-header-content">
                        <div class="page-header-content-inner">
                            <h1>Produktet</h1>

                            <ul class="breadcrumb">
                                <li><a href="index.php">Ballina</a></li>
                                <li class="current"><a href="produktet.php">Produktet</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area ==-->

    <!--== Start Page Content Wrapper ==-->
    <div class="page-content-wrapper sp-y">
        <div class="container container-wide">
            <div class="row">
                <div class="col-lg-3 order-1 order-lg-0">
                    <div class="sidebar-area">
                        <div class="sidebar-item">
                            <h4 class="sidebar-title">Llojet e produkteve</h4>
                            <div class="sidebar-body">
                                <ul class="sidebar-list">
                                    <li><a href="#">Pjese elektrike</a></li>
                                    <li><a href="#">Pjese pneumatike</a></li>
                                    <li><a href="#">Pjese mekanike</a></li>
                                    <li><a href="#">Pjese hidraulike</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-item">
                            <h4 class="sidebar-title">Produktet e fundit</h4>
                            <div class="sidebar-body">
                                <div class="sidebar-product">
                                    <a href="#" class="image"><img src="assets/img/product/Product-9.jpg" alt="product" /></a>
                                    <div class="content">
                                        <a href="#" class="title">Fotocelule</a>
                                        <!-- <span class="price">$799.99</span> -->
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-product">
                                    <a href="#" class="image"><img src="assets/img/product/Product-12.jpg" alt="product" /></a>
                                    <div class="content">
                                        <a href="#" class="title">Butona Sinjalizues</a>
                                        <!-- <span class="price">$599.99 <span class="old">$799.99</span></span> -->
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-product">
                                    <a href="#" class="image"><img src="assets/img/product/Product-13.jpg" alt="product" /></a>
                                    <div class="content">
                                        <a href="#" class="title">Motovibrator</a>
                                        <!-- <span class="price">$649.99 <span class="old">$799.99</span></span> -->
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-item">
                            <!-- <h4 class="sidebar-title">Product categories</h4>
                            <div class="sidebar-body">
                                <ul class="sidebar-list">
                                    <li><a href="#">All Product</a></li>
                                    <li><a href="#">Best Seller</a></li>
                                    <li><a href="#">Car</a></li>
                                    <li><a href="#">Parts</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Tayer</a></li>
                                    <li><a href="#">Uncategorized</a></li>
                                </ul>
                            </div> -->
                        </div>

                        <div class="sidebar-item">
                            <!-- <h4 class="sidebar-title">Product tags</h4>
                            <div class="sidebar-body">
                                <ul class="tags">
                                    <li><a href="#">Car</a></li>
                                    <li><a href="#">Parts</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Tayer</a></li>
                                    <li><a href="#">Seat</a></li>
                                    <li><a href="#">Engine</a></li>
                                    <li><a href="#">Parts</a></li>
                                    <li><a href="#">Fuel</a></li>
                                    <li><a href="#">Modern</a></li>
                                    <li><a href="#">Brake</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 order-0 order-lg-1">
                    <div class="action-bar-inner mb-30">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="shop-layout-switcher mb-15 mb-sm-0">
                                    <ul class="layout-switcher nav">
                                        <li data-layout="grid" class="active"><i class="fa fa-th"></i></li>
                                        <li data-layout="list"><i class="fa fa-th-list"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="sort-by-wrapper">
                                    <label for="sort" class="sr-only">Filtro</label>
                                    <select name="sort" id="sort">
                                        <option value="#">Pjeset </option>
                                        <option value="sbp">Pjese elektrike</option>
                                        <option value="sbn">Pjese pneumatike</option>
                                        <option value="sbt">Pjese mekanike</option>
                                        <option value="sbr">Pjese hidraulike</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-wrapper product-layout layout-grid">
                        <div class="row mtn-30">
                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-1.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-1.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Valvula pneumatike</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-2.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-2.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Inverter</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-3.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-3.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Kontaktor</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-4.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-4.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Transformator</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-5.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-5.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Llampa sinjalizuese</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-6.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-6.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Encoder</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-7.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-7.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Sensor Induktiv</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-8.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-8.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Celes Parket</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-9.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-9.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Fotocelule</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-10.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-10.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Celesa Fundor</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-12.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-12.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Butona Sinjalizues</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-13.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-13.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Motovibrator</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-14.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-14.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Motoreduktor</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-15.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-15.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Valvula pneumatike</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-16.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-16.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Valvula pneumatike</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <!-- <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p> -->
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-17.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-17.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Auto Clutch & Brake</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-18.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-18.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Auto Clutch & Brake</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-19.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-19.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Auto Clutch & Brake</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-20.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-20.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Auto Clutch & Brake</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-21.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-21.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Auto Clutch & Brake</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-22.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-22.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Auto Clutch & Brake</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-23.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-23.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Auto Clutch & Brake</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-24.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-24.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Auto Clutch & Brake</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->


                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-25.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-25.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Auto Clutch & Brake</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-26.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-26.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Auto Clutch & Brake</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>
<!-- 
                                        <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="#">
                                            <img class="thumb-primary" src="assets/img/product/Product-27.jpg" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/Product-27.jpg" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="#">Auto Clutch & Brake</a></h4>
                                            <!-- <span class="price"><strong>Price:</strong> $165.00</span> -->
                                        </div>

                                        <!-- <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div> -->

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">Pjesë</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                           
                        </div>
                    </div>

                    <!-- <div class="action-bar-inner mt-30">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <nav class="pagination-wrap mb-10 mb-sm-0">
                                    <ul class="pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="ion-ios-arrow-thin-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="col-sm-6 text-center text-sm-end">
                                <p>Showing 1–12 of 26 results</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Content Wrapper ==-->


    

    <?php

include "inc/footer.php";

?>