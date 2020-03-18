$('.date').mask("00/00/0000",{placeholder: "__/__/____"});
$('.money').mask('000,000,000,000,000', {reverse: true});
function closeModal(){
    $('#sizesModal').modal('hide');
  //  setTimeout(function(){
  //  $('#sizesModal').remove();
//},500);
  }
function preview_image() 
{
  $('#image_preview').empty();
 var total_file=document.getElementById("images").files.length;
 var name_images='';
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' class=\"image\">");
 	name_images+=document.getElementById("images").files[i].name+';';
 }
 name_images=name_images.substring(0, name_images.length - 1);
 document.getElementById("name_images").value=name_images;
}
function updateSizes(){
  var sizeString='';
  var qtt=0;
  for(var i=1;i<=8; i++){
    if($('#size'+ i).val()!=''){
      sizeString+=$('#size'+ i).val()+':'+$('#qty'+ i).val()+',';
      qtt+=parseInt($('#qty'+ i).val());
      
    }
  }
  $('#sizes').val(sizeString);
 // $('#quantitysize').val(qtt);
}
  $("#form1").submit(function(e){
  	e.preventDefault();
  $url=$(this).attr('action');
  $method=$(this).attr('method');
  
   
    $.ajax({
         url: $url,
         type: $method,
         data:  new FormData(this),
         contentType: false,
               cache: false,
         processData:false,
         beforeSend : function()
         {
          //$("#preview").fadeOut();
          $("#err").fadeOut();
         },
         success: function(data)
            {
          if(data=='invalid')
          {
           // invalid file format.
           // $("#err").html("Invalid File !").fadeIn();
          }
          else
          {
           // view uploaded file.
           
           $("#form1")[0].reset();
         // window.location.replace("http://code.com.vn/admin/product");

          }
            },
           error: function(e) 
            {
          // $("#err").html(e).fadeIn();
            }          
          });
   	    
  });


 