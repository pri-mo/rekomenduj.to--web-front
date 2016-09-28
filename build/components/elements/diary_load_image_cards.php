<script>
  var cards = 4;
  var imagesToSend = new Map();
  var numberOfImage = 0;

  function fileSizeSI(size) {
    var e = (Math.log(size) / Math.log(1e3)) | 0;
    return +(size / Math.pow(1e3, e)).toFixed(2) + ' ' + ('kMGTPEZY'[e - 1] || '') + 'B';
  }

  function addListElement(i, file){
    var div = document.createElement('div');
    div.setAttribute("class", "diary-media__items");
    div.setAttribute("id", i);
    var innerDiv = document.createElement('div');
    innerDiv.setAttribute("class","diary-media__remove-item");
    innerDiv.setAttribute("data-icon","b");
    innerDiv.setAttribute("onclick","removeListElement("+i+")");
    div.appendChild(innerDiv);
    var label = document.createElement('label');
    label.setAttribute("class", "diary-media__file-details");
    label.setAttribute('data-size', fileSizeSI(file.size));
    label.setAttribute('data-name', file.name);
    div.appendChild(label);
    return div;
  }

  function removeListElement(elementId){
    $("div#"+elementId).remove();
    imagesToSend.delete(parseInt(elementId));
    console.log(imagesToSend);
    updateImagesTotalSize();
  }

  function removeList(){
    imagesToSend.forEach(function(val, key, map){
      removeListElement(key);
    });
  }

  function loadImage(files, card){
    for(var i = 0; i < files.length; i++){
      numberOfImage += 1;
      $ ("#summary").before(addListElement(numberOfImage, files[i]))
      imagesToSend.set(numberOfImage, [
        window.URL.createObjectURL(files[i]), files[i].size]);
      document.querySelector("#image").src = window.URL.createObjectURL(files[i]);
    }
    if (files.length > 0 && card == 'card_add_images'){
      changeCard('card_add_images', 'card_list_images');
    }
    updateImagesTotalSize();
  }

  function calculateImagesTotalSize(){
    var sum = 0;
    imagesToSend.forEach(function(val, key, map){
      sum += val[1];
    });
    return sum;
  }

  function updateImagesTotalSize() {
    $( "#total_size" ).attr('data-size', fileSizeSI(calculateImagesTotalSize()));
  }

  function setCardProgressHeight(){
    fakeProgress('70%');
    $( "#card_upload_progress").css('height', $( "#card_list_images").height());
  }

  function changeCard(prev, next){
    $("#"+prev).hide(); $("#"+next).show();
  }

  function fakeProgress(width) {
    $ ( 'div#bar' ).css({'width': width});
  }

</script>
<div id="card_add_images"
  class="layout--card input input--file-upload diary-media__upload">
  <input type="file"
    name="file" id="file"
    multiple
    onchange="loadImage(this.files, 'card_add_images')">
  <label for="file">
    <span class="rg-upload file-upload__icon"></span>
    <span class="file-upload__cta">Dodaj relację ze spotkania. Możesz załadować zdjęcie, plik audio lub video.</span>
  </label>
</div>

<div id="card_list_images"
  class="layout--card diary-media__upload-list" style="display: none">
  <div id="summary"
    class="diary-media__items total">
    <div class="input input--file-upload input--button">
      <input id="file"
        type="file"
        name="file"
        multiple onchange="loadImage(this.files, 'card_list_images')">
      <label for="file"><span data-icon="e"></span></label>
    </div>
    <div id="total_size"
        class="diary-media__upload-total"
        data-label="Łącznie: "
        data-size=""></div>
  </div>
  <button id="uploadFiles"
    class="button--icon button--cta force--cta diary-media__floating-button"
    data-icon="1"
    onclick="changeCard('card_list_images','card_upload_progress'); setCardProgressHeight()"></button>
</div>

<div id="card_upload_progress"
    class="layout--card diary-media__upload-progress " style="display: none">
  <div id="bar">
    <!-- TODO  switch when loading is complete -->
    <label
      data-size="21kB"
      data-total-size="251MB"
      onclick="changeCard('card_upload_progress','card_show_image')">Ładuję...</label>
  </div>
  <button class="diary-media__floating-button button--icon button--cta ripple stop"
  data-icon="b"
  onclick="changeCard('card_upload_progress','card_list_images')" ></button>
</div>

<div id="card_show_image"
  class="layout--card " style="display: none">
  <img id="image" src="image"/>
  <span class="diary-media__label--replace"
    data-icon="n"
    onclick="changeCard('card_show_image','card_add_images'); removeList()">WYMIEŃ</span>
</div>
