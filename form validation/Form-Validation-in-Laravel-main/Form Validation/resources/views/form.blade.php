<html>
    <title>Form</title>
    <h1 align="center">Contact Form</h1>
    <body>
        <form method="post" action="{{URL::to('/submit')}}" enctype="multiparth/form-data">
            @csrf
            Name : <input type="text" name="txt1"/>
            @error('txt1')
            <strong style="color:red">{{$message}}</strong>
            @enderror
</br>
 
            Surname : <input type="text" name="txt2"/>
            @error('txt2')
            <strong style="color:red">{{$message}}</strong>
            @enderror
</br>

            Mobile : <input type="text" name="txt3"/>
            @error('txt3')
            <strong style="color:red">{{$message}}</strong>
            @enderror
</br>

            Email : <input type="email" name="txt4"/>
            @error('txt4')
            <strong style="color:red">{{$message}}</strong>
            @enderror
</br>
           <input type="submit" name="action" value="submit"/>
</form>
</body>
</html>
