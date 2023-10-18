<?php
/**
 * Yourseobook Customizer Custom Controls
 *
 */

if ( class_exists( 'WP_Customize_Control' ) ) {


class Yourseobook_SEO_Custom_Control extends WP_Customize_Control {
    public $type = 'accordion_menu';

    public function render_content() {
        ?>


<style>
     .accordion:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}
.topnav {
  overflow: hidden;
  background-color: #3e008e;
  text-align: center !important;
  margin: 0px auto;
  border-bottom: 2px solid #fff;
  box-shadow: 0px 10px 20px -10px #000;
}

.topnav a {
  float: left;
  display: block;
  color: #fff;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  font-size: 12px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 14px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 14px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
.topnav a{
font-size:12px;
}
</style>





<div class="topnav">
  <a href="#">Head Metas</a>
  <a href="#">MetaTT</a>
  <a href="#">MetaD</a>
  <a href="#">Brand Name</a>

</div>
<h2 class="head-metas"><span class="dashicons dashicons-admin-settings"></span> SEO Head Meta Tags</h2>
  <div class="hm">
<button class="accordion"><span class="dashicons dashicons-media-code"></span> SEO Function for Header Metas</button>
<div class="panel">
<p>The Your SEO Book SEO Function for Header Metas provides a comprehensive solution for optimizing your website's meta tags, specifically the Meta TT (meta title tag) and MetaD (meta description). With this powerful function, you can effortlessly customize and fine-tune these crucial elements to improve your site's search engine visibility and user experience.</p>
</div>

<button class="accordion"><span class="dashicons dashicons-admin-plugins"></span> Dynamically Generate Meta Tags</button>
<div class="panel">
<p>By dynamically generating meta titles and descriptions, you can enhance your website's click-through rates and ensure that your pages accurately reflect their content.</p>
</div>

</div>
<h3 class="head-metas"><span class="dashicons dashicons-admin-home"></span> Header Metas for Landing Page</h3>

<details id="serpm" class="serp-metas">
<summary id="seodst" class="seo-summary-title">Land Header Meta Title Tag</summary>
<div class="serp-details-content">
<h3 class="summary-title">SEO MetaTT - Meta Title Tag</h3>

<p class="details-content">With the Header Metas feature in Your SEO Book, you have the flexibility to enable your brand name in the MetaTT and take full advantage of its benefits. Boost your brand visibility, improve click-through rates, and create a cohesive brand experience across your website with this powerful functionality.</p>
</div>
</details>

<details id="serpm" class="serp-metas">
<summary id="seodst" class="seo-summary-title">Land Header Meta Description</summary>
<div class="serp-details-content">
<h3 class="summary-title">SEO MetaD - Meta Description</h3>

<p class="details-content">The MetaD capability enables you to provide concise yet impactful descriptions for your web pages. By utilizing carefully chosen keywords and concise language, you can create compelling snippets that entice users to click through to your website. Crafting engaging meta descriptions not only improves your search engine visibility but also enhances the user experience by providing clear and concise information about the page's content. </p>
</div>
</details>

<details id="serpm" class="serp-metas">
<summary id="seodst" class="seo-summary-title">Land Header Brand Name in MetaTT</summary>
<div class="serp-details-content">
<h3 class="summary-title">Enable Brand Name in the MetaTT</h3>

<p class="details-content">Moreover, enabling the brand name in the MetaTT adds a layer of consistency across your website's pages. Whether users land on your homepage, blog posts, or product pages, they will see your brand name in the title tag, reinforcing the association between your brand and the content they are viewing. This cohesive approach not only improves user experience but also builds trust and credibility among your target audience.</p>
</div>
</details>

<h3 class="head-metas"><span class="dashicons dashicons-admin-page"></span> Header Meta Tags for Internal Pages</h3>

  <div class="hm">

<button class="accordion"><span class="dashicons dashicons-edit-page"></span> Meta Title Tag for Internal Pages</button>
<div class="panel">
<details>
<summary>Setup MetaTT for Internal Pages</summary>
<h3 class="head-metas">MetaTT for Internal Pages</h3>

  <p>The Your SEO Book SEO Function for Header Metas provides a comprehensive solution for optimizing your website meta tags, specifically the Meta TT (meta title tag) and MetaD (meta description). With this powerful function, you can effortlessly customize and fine-tune these crucial elements to improve your site search engine visibility and user experience. By dynamically generating meta titles and descriptions, you can enhance your website click-through rates and ensure that your pages accurately reflect their content.With the Your SEO Book SEO Function for Header Metas, you can easily optimize these critical elements, ensuring that your website stands out in search results and attracts the right audience.</p>

</details>

</div>

<button class="accordion"><span class="dashicons dashicons-media-text"></span> Meta Description for Internal Pages</button>
<div class="panel">
  <p>The MetaD capability enables you to provide concise yet impactful descriptions for your web pages. By utilizing carefully chosen keywords and concise language, you can create compelling snippets that entice users to click through to your website. Crafting engaging meta descriptions not only improves your search engine visibility but also enhances the user experience by providing clear and concise information about the page's content.</p>
</div>
</div>
<hr>
<div style="height:190px;width:345px;display: inline-block;"></div>
<div class="dropup-center dropup">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<span class="material-symbols-outlined" style="font-size: 16px;background: #f44336;color: #fff;padding: 2px;border-radius: 4px;border: 1px solid #000;" type="button" data-bs-toggle="dropdown" aria-expanded="false">brush</span>
  <ul class="dropdown-menu small-square" style="max-width: 21px; min-width: 21px; border-radius: 4px; background: rgb(0, 0, 0); padding: 5px 3px; transition: all 0.2s ease-in 0s; position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(0.5px, -27px, 0px);">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>


  </ul>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</div>

<script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function(event) {
      event.preventDefault(); // Prevent default action
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
</script>


<style>
ul.small-square li{
width: 12px;
height: 12px;
display: block;
border: 1px solid #000;
background: #fff;
}
.hm {
  display: block;
  max-width: 100%;
  background: #ccc;
  padding: 10px;
  margin: 10px 0px 30px 0px;
  border: 1px solid #3e008e;
  border-radius: 4px;
  box-shadow: 0px 20px 10px -10px #000;
}
h2.head-metas{
text-align:center;background: #3e008e;padding: 10px 0px 10px 0px;border-radius: 8px;color: #fff;font-size: 18px;
}
h3.head-metas{
text-align:center;background: #3e008e;padding: 10px 0px 10px 0px;border-radius: 8px;color: #fff;font-size: 14px;
}
h3.summary-title{
font-size:14px;font-weight:300;font-family: Helvetica, Arial, sans-seriff;color: #00ff28;border-bottom: 1px dotted #00ff28;padding: 0px 0px 10px 0px;box-shadow: 0px 10px 10px -10px #00ff28;text-align: center;
}
details#serpm {
  max-width: 100%;
  display: block;
  background: #000;
  padding: 10px;
  color: #fff;
  border-radius: 4px;
  margin: 20px 0px 20px 0px;
  border: 1px solid #f00;
  box-shadow: 0px 10px 10px -10px #000;
}
.accordion {

  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 13px;
  transition: 1.1s;
}

.active, .accordion:hover {
  background-color: #000;
  color: #fff;
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>

        <?php
    }
}


}