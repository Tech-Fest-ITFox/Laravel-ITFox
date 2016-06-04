<form action="">
    <div class="file-input">
	    <input type="file" name="file" id="file" accept="*" class="btn">
    	<label for="file" class="btn">Избери файл</label>
    </div>
	<button type="submit" class="btn">Качи файла</button>
	<input type="hidden" name="_token" value="{{ Session::token() }}">
</form>