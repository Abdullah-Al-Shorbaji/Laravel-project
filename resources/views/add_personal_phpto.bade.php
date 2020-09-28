<div class="personal-photo-container">
            <img id="personal-photo" name="personal-photo" src="" onerror="this.onerror=null; this.src='{{asset('images/question_mark.png')}}'" alt="My photo"/>
            <button id="clear-image" name="clear-image" onClick="reset_image();">
                <i class="fa fa-times" style="background-color:	#f5f6fc; color: #4ad6ff; font-size: 20px;"></i>
            </button>
            <br>
            <button id="add_photo_button">Add personal photo</button>
            <br>
            <input type="file" id="file" name="file" value="Add personal photo" onchange="display_image(this)">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>