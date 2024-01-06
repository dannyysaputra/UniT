<?php

namespace App\Http\Controllers;

use App\Models\OtpVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgetPassController extends Controller
{
    public function index()
    {
        return view('mahasiswa.auth.forgetpass');
    }

    public function forgetPassword(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        return redirect("/verification/" . $user->id);
    }

    public function sendOtp($user)
    {
        $otp = rand(100000, 999999);
        $time = time();

        OtpVerification::updateOrCreate(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'otp' => $otp,
                'created_at' => $time
            ]
        );

        $data['email'] = $user->email;
        $data['title'] = 'Email Verification';

        $data['body'] = 'Your OTP is:- ' . $otp;

        Mail::send('mahasiswa.auth.mailVerification', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });
    }

    public function verification($id)
    {
        $user = User::where('id', $id)->first();

        $email = $user->email;
        $this->sendOtp($user);

        return view('verification', compact($email));
    }

    public function verifiedOtp(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $otpData = OtpVerification::where('otp', $request->otp)->first();

        if (!$otpData) {
            return back()->with('failed', 'You entered wrong otp!');
        } else {
            $currentTime = time();
            $time = $otpData->created_at;

            if ($currentTime >= $time && $time >= $currentTime - (90 + 5)) {
                return redirect('/change-password')->with('failed', 'You entered wrong otp!');
            } else {
                return back()->with('failed', 'You OTP expired!');
            }
        }
    }

    public function resendOtp(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $otpData = OtpVerification::where('otp', $request->otp)->first();

        $currentTime = time();
        $time = $otpData->created_at;

        if ($currentTime >= $time && $time >= $currentTime - (90 + 5)) {
            return back()->with('failed', 'Please try again');
        } else {
            $this->sendOtp($user);
            return back()->with('success', 'OTP has been send!');
        }
    }
}
