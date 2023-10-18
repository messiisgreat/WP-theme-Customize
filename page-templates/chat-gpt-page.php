<?php /* Template Name: ChatGPT Custom Template */?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<p>With Your SEO Book Pro, you’ll have access to a wide range of features that make optimizing your website a breeze. From customizable page layouts to integrated API integration and responsive design, this theme has everything you need to enhance your website’s performance. Take advantage of the 10 custom navigation menus, sidebar widgets, and custom footer widgets to create a seamless user experience. With automatic internal linking and integrated Google Analytics and Search Console, you can easily track your website’s performance and make data-driven decisions to improve your SEO strategy.</p>
<input type="search" role="contentinfo" class="" name="openChatGPTModal" id="openChatGPTModal" style="max-width:750px;max-height:55px;margin:0px auto;border:1px solide #ccc;" placeholder="Send a Message">
<small style="font-size:12px;">Free Research Preview. ChatGPT may produce inaccurate information about people, places, or facts. ChatGPT May 24 Version</small>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chatgpt-button">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="chatgpt-button" tabindex="-1" aria-labelledby="chatgpt-buttonLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="chatgpt-buttonLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <button id="chatgpt-button">Open ChatGPT</button>
<?php echo do_shortcode('[chatgpt_button]');?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>