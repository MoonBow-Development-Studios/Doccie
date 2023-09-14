<?php

namespace App\Http\Controllers;


use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;

class SessionController extends Controller
{
    public function login(): Response
    {
        return Inertia::render('session/login');
    }

    public function register(): Response
    {
        return Inertia::render('session/register');
    }

    public function create() {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $attributes['email'];
        $password = $attributes['password'];

        if (auth()->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('app.index');
        } else {
            return Inertia::render('login', ['error' => 'The email or password you entered is incorrect. Please check your credentials and try again.']);
        }
    }

    public function store() {
        $attributes = request()->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'repeatPassword' => 'required'
        ]);

        $firstName = $attributes['firstName'];
        $lastName = $attributes['lastName'];
        $email = $attributes['email'];
        $password = $attributes['password'];
        $repeatPassword = $attributes['repeatPassword'];

        if ($password !== $repeatPassword) {
            return Inertia::render('session/register', ['error' => 'The passwords you entered do not match. Please try again.']);
        }

        if (strlen($password) < 8) {
            return Inertia::render('session/register', ['error' => 'The password you entered is too short. Please enter a password that is at least 8 characters long.']);
        }

        // check if password contains at least one number, one lowercase letter, one uppercase letter, and one special character
        /*
         * Regex explanation:
         * ^(?=\S*[a-z]) - at least one lowercase letter
         * (?=\S*[A-Z]) - at least one uppercase letter
         * (?=\S*[0-9]) - at least one number
         * (?=\S*[[:punct:]|§µ¤£¨]) - at least one special character
         * \S{8,}$ - at least 8 characters -> We already checked this above, but it's good to have it here as well
         * https://regex101.com/r/1ndBYE/2
         */

        if (!preg_match("/^(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[0-9])(?=\S*[[:punct:]|§µ¤£¨])\S{8,}$/m", $password)) {
            return Inertia::render('session/register', ['error' => 'Passwords must contain at least one number, one lowercase letter, one uppercase letter, and one special character.']);
        }

        // check if email is already in use
        if (User::where('email', $email)->exists()) {
            return Inertia::render('session/register', ['error' => 'The email you entered is already in use. Please use another.']);
        }

        // create user
        $user = User::create([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        // log user in
        auth()->login($user);
        return redirect()->route('app.index');
    }
}
