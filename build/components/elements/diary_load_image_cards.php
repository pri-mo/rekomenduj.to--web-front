<script>
  var cards = 4;
  var imagesToSend = new Map();
  var numberOfImage = 0;
  var image = '';

  function fileSizeSI(size) {
    var e = (Math.log(size) / Math.log(1e3)) | 0;
    return +(size / Math.pow(1e3, e)).toFixed(2) + ' ' + ('kMGTPEZY'[e - 1] || '') + 'B';
  }

  function addImageToList(listID, i, file){
    $( "#"+listID ).append(createLabel(i, file));
    $( "#"+listID ).attr( "data-answercount", i);
  }

  function newLabel(i, file){
    var div = document.createElement('div');
    div.setAttribute("class", "diary-media__items");
    div.setAttribute("id", i);
    var innerDiv = document.createElement('div');
    innerDiv.setAttribute("class","diary-media__remove-item");
    innerDiv.setAttribute("data-icon","b");
    innerDiv.setAttribute("onclick","removeImage2("+i+")");
    var label = document.createElement('label');
    label.setAttribute("class", "diary-media__file-details");
    label.setAttribute('data-size', fileSizeSI(file.size));
    label.setAttribute('data-name', file.name);
    div.appendChild(innerDiv);
    div.appendChild(label);
    return div;
  }

  function changeCard(prev, next){
    $("#"+prev).hide(); $("#"+next).show();
  }

  function onInputChange(files, card){
    for(var i = 0; i < files.length; i++){
      numberOfImage += 1;
      $ ("#c1-1").before(newLabel(numberOfImage, files[i]))
      imagesToSend.set(numberOfImage, [window.URL.createObjectURL(files[i]), files[i].size]);
      document.querySelector("#image").src = window.URL.createObjectURL(files[i]);
    }
    if (files.length > 0 && card == 'c0'){
      changeCard('c0', 'c1');
    }
    updateTotalSizeToUpload();
  }

  function removeImage2(el){
    $("div#"+el).remove();
    imagesToSend.delete(parseInt(el));
    console.log(imagesToSend);
    updateTotalSizeToUpload();
  }

  function removeImage(el){
    $("label#"+el).remove();
    imagesToSend.delete(parseInt(el));
    console.log(imagesToSend);
    updateTotalSizeToUpload();
  }

  function calculateImagesTotalSize(){
    var sum = 0;
    imagesToSend.forEach(function(val, key, map){
      sum += val[1];
    });
    return sum;
  }

  function updateTotalSizeToUpload() {
    $( "#totalSize" ).attr('data-size', fileSizeSI(calculateImagesTotalSize()));
  }

  function openFileExpl(){
    $(":file").click();
  }

  function setH(){
    $( "#c2").css('height', $( "#c1").height());
  }


</script>

<div id="c0" class="layout--card input input--file-upload diary-media__upload">
  <input type="file" name="file" id="file" multiple onchange="onInputChange(this.files, 'c0')">
  <label for="file">
    <span class="rg-upload file-upload__icon"></span>
    <span class="file-upload__cta">Dodaj relację ze spotkania. Możesz załadować zdjęcie, plik audio lub video.</span>
  </label>
</div>

<div id="c1" class="layout--card diary-media__upload-list" style="display: none">
  <div id="c1-1" class="diary-media__items total">
    <div class="input input--file-upload input--button">
      <input type="file" id="file" name="file" multiple onchange="onInputChange(this.files, 'c1')">
      <label for="file"><span data-icon="e"></span></label>
    </div>
    <!-- <input class="inputfile" type="file" name="file" multiple onchange="onInputChange(this.files, 'c1')"> -->
    <div id="totalSize" class="diary-media__upload-total" data-label="Łącznie: " data-size=""></div>
  </div>
  <button onclick="changeCard('c1','c2'); setH()" id="uploadFiles" class="button--icon button--cta force--cta diary-media__floating-button" data-icon="1"></button>
</div>

<div id="c2" class="layout--card diary-media__upload-progress" style="display:none">
  <div class="progress-bar">
    <div class="progress-bar-content"></div>
    <!-- TODO  onclick in label is only to switch cards, switch when loading is complete -->
    <label onclick="changeCard('c2','c3')" class="progress-bar-val" data-name="21kB z 251MB">Ładuję...</label>
  </div>
  <button onclick="changeCard('c2','c1')" id="stopUpload" class="diary-media__floating-button button--icon button--cta ripple stop" data-icon="b"></button>
</div>

<div id="c3" style="display: none;" class="layout--card">
  <img id="image" src="image"/>
  <span onclick="changeCard('c3','c0')"  class="image-label" data-icon="n">WYMIEŃ</span>
</div>
