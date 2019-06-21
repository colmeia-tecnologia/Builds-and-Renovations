<div class="row">
    <div class="input-field col s12">
        <input id="name" name='name' type="text" value='{{old('name')}}'>
        <label for="name">Name</label>
        @if ($errors->has('name'))
            <div class="red-text">{{ $errors->first('name') }}</div>
        @endif
    </div>
    <div class="input-field col s12">
        <input id="email" name='email' type="email" value='{{old('email')}}'>
        <label for="email">Email</label>
        @if ($errors->has('email'))
            <div class="red-text">{{ $errors->first('email') }}</div>
        @endif
    </div>
    <div class="input-field col s12">
        <input id="telephone" name='telephone' type="text" class='telephone'value='{{old('telephone')}}'>
        <label for="telephone" id='label-telephone'>Telephone</label>
        @if ($errors->has('telephone'))
            <div class="red-text">{{ $errors->first('telephone') }}</div>
        @endif
    </div>
    <div class="input-field col s12">
        <input id="subject" name='subject' type="text" value='{{old('subject')}}'>
        <label for="subject">Subject</label>
        @if ($errors->has('subject'))
            <div class="red-text">{{ $errors->first('subject') }}</div>
        @endif
    </div>
    <div class="input-field col s12">
        <textarea id="message" name='message' class="materialize-textarea">{{old('message')}}</textarea>
        <label for="message">Message</label>
        @if ($errors->has('message'))
            <div class="red-text">{{ $errors->first('message') }}</div>
        @endif
    </div>
    <div class="col s12 center">
        <button type='submit' class='btn btn-large waves-effect waves-light primary'>
            <i class="material-icons left">near_me</i> Send
        </button>
    </div>
</div>