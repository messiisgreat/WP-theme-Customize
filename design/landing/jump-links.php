<div class="nav-scroller py-1 mb-2 jump-links">


                <nav id="jumplinks" class="nav d-flex justify-content-between">


                  <div class="nav nav-pills">

<a class="nav-link" href="#landing-atf" title="">Above The Fold</a>
<a class="nav-link" href="#landing-btf" title="">Jump Link 2</a>
<a class="nav-link" href="#landing-about" title="">Jump Link 3</a>
<a class="nav-link" href="#" title="">Jump Link 4</a>
<a class="nav-link" href="#" title="">Jump Link 5</a>
<a class="nav-link" href="#" title="">Jump Link 6</a>
<a class="nav-link" href="#" title="">Jump Link 7</a>
<a class="nav-link" href="#" title="">Jump Link 8</a>
<a class="nav-link" href="#" title="">Jump Link 9</a>
<a class="nav-link" href="#" title="">Jump Link 10</a>
<a class="nav-link" href="#" title="">Jump Link 11</a>


</div>


                </nav>


                </div>


                <script>

                $(function() {
                    var nav = $(".jump-links");
                    $(window).scroll(function() {
                        var scroll = $(window).scrollTop();

                        if (scroll >= 500) {
                            nav.removeClass('header').addClass("header-alt");
                        } else {
                            nav.removeClass("header-alt").addClass('header');
                        }
                    });
                });




                </script>

