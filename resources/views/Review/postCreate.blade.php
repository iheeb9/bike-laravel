<div class="col-md-3">
  <div id="review-form">
    <form class="review-form" action="{{ route('clientreview.store')}}) }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input class="input" type="text"  name="user">
      <input class="input" type="text"  name="review">

      <input class="input" id="Subject" type="text" placeholder="Subject"  name="Subject">

      <textarea name="Commentaire" id="Commentaire" class="input" placeholder="Commentaire" aria-label="description" aria-describedby="basic-icon-default-message2"></textarea>

      <input name="image" class="input" type="file" id="image">

      <button class="primary-btn">Submit</button>
    </form>
  </div>
</div>
