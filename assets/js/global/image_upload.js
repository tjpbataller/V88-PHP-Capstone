$(document).ready(function() {
    let imageUpload = $('#image_upload');
    let imagePreview = $('#image_preview');
    let limit = 4;

    imageUpload.on('change', function() {
      let files = $(this)[0].files;
      let totalImagesCount = imagePreview.children().length + files.length;

      if (totalImagesCount > limit) {
        alert(`You can only select up to ${limit} images.`);
        this.value = ''; // Reset the file input
        return;
      }

      for (let i = 0; i < files.length; i++) {
        let file = files[i];
        let reader = new FileReader();

        reader.onload = function(e) {
          let imageContainer = $('<div class="image_container"></div>');
          let image = $('<img />');
          let removeButton = $('<button class="remove_button">&times;</button>');
          let radioButton = $('<input type="radio" class="radio_input" name="main_photo" />');

          image.attr('src', e.target.result);
          imageContainer.append(image);
          imageContainer.append(removeButton);
          imageContainer.append(radioButton);
          imageContainer.on('click', function() {
            radioButton.prop('checked', true); // Select radio button when image is clicked
          });
          removeButton.on('click', function() {
            imageContainer.remove(); // Remove image container when remove button is clicked
            updateUploadInput(); // Update file input
          });
          imagePreview.append(imageContainer);
          updateUploadInput(); // Update file input
        }
        reader.readAsDataURL(file);
      }
      $(this).val('');
    });

    function updateUploadInput() {
      let files = Array.from(imageUpload[0].files);
      let remainingSlots = limit - imagePreview.children().length;

      if (remainingSlots > 0) {
        imageUpload.prop('disabled', false);
        $(".upload_image").show();
      } else {
        imageUpload.prop('disabled', true);
        $(".upload_image").hide();
      }
    }
  });