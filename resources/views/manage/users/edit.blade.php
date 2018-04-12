@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Edit User</h1>
            </div>
        </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
        <div class="column">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
            {{ csrf_field() }}
                <div class="field">
                    <label for="name" class="label">Name</label>
                    <input type="text" class="input" name="name" id="name">
                </div>

                <div class="field">
                    <label for="email" class="label">Email:</label>
                    <p class="control">
                        <input type="text" class="input" name="email" id="email">
                    </p>
                </div>
            
                <div class="field">
                    <label for="password" class="label">Password:</label>
                    <!-- <b-radio-group v-model="password_options">
                        <div class="field">
                            <b-radio-value="keep">Do Not Change Password</b-radio>
                            <b-radio-value="manual">Manually Set New Password</b-radio>
                        </div>
                        <div class="field">
                            <b-radio-value="auto">Auto-Generate New Password</b-radio>
                        </div>
                        <div class="field">
                            <b-radio-value="manual">Manually Set New Password</b-radio> 
                        </div>
                    </b-radio-group> -->
                    <input type="radio" name="keep" value="keep">Keep
                    <input type="radio" name="manual" value="manual">Manual
                    <input type="radio" name="auto" value="auto">Auto
                    <p class="control">
                        <input type="text" class="input" name="password" id="password" placeholder="Manually give a password to this user">
                    </p>
                    <!-- <p class="control">
                        <input type="text" class="input" name="password" id="password" v-if="password-options == 'manual'" placeholder="Manually give a password to this user">
                    </p> -->
                </div>

                <button class="button is-primary ">Edit User</button>
            
            </form>
        </div>
    </div>
    
@endsection

@section('scripts')
<script>
    var app = new Vue({
        el: '#app',
        data: {
            password_options: keep
        }
    });
</script>