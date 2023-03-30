function previewImage1(){
    const image1 = document.querySelector('#img_name1');
    const dummyImg1 = document.querySelector('#dummyImg1');
    const imgPreview1 = document.querySelector('.img-preview1');

    imgPreview1.style.display = 'block';
    dummyImg1.style.display = 'none'; 

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image1.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview1.src = oFREvent.target.result;
    }
}
function previewImage2(){
  const image2 = document.querySelector('#img_name2');
  const dummyImg2 = document.querySelector('#dummyImg2');
  const imgPreview2 = document.querySelector('.img-preview2');

  imgPreview2.style.display = 'block';
  dummyImg2.style.display = 'none'; 

  const oFReader = new FileReader();
  oFReader.readAsDataURL(image2.files[0]);

  oFReader.onload = function(oFREvent){
    imgPreview2.src = oFREvent.target.result;
  }
}
function previewImage3(){
  const image3 = document.querySelector('#img_name3');
  const dummyImg3 = document.querySelector('#dummyImg3');
  const imgPreview3 = document.querySelector('.img-preview3');

  imgPreview3.style.display = 'block';
  dummyImg3.style.display = 'none'; 

  const oFReader = new FileReader();
  oFReader.readAsDataURL(image3.files[0]);

  oFReader.onload = function(oFREvent){
    imgPreview3.src = oFREvent.target.result;
  }
}
function previewImage4(){
  const image4 = document.querySelector('#img_name4');
  const dummyImg4 = document.querySelector('#dummyImg4');
  const imgPreview4 = document.querySelector('.img-preview4');

  imgPreview4.style.display = 'block';
  dummyImg4.style.display = 'none'; 

  const oFReader = new FileReader();
  oFReader.readAsDataURL(image4.files[0]);

  oFReader.onload = function(oFREvent){
    imgPreview4.src = oFREvent.target.result;
  }
}
    
    
    

    
    
    

    
    
    