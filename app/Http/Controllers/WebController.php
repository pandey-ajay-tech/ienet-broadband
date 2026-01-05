<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about(Request $request)
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function plans_carousel()
    {
        return view('pages.packages-carousel');
    }

    public function plans_pricing()
    {
        return view('pages.packages');
    }

    public function quickRecharge()
    {
        return view('pages.quick-recharge');
    }

    public function myAccount()
    {
        return view('pages.my-account');
    }

    public function bookNow()
    {
        return view('pages.book-now');
    }

    public function contact()
    {
        return view('pages.contact');
    }


    public function service()
    {
        // return view('pages.service-d-broadband');
        return view('pages.services');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function send_query(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // 1️⃣ Email to Admin
        $adminHtml = '
            <div style="font-family:Arial,sans-serif;max-width:600px;margin:auto;border:1px solid #ddd;padding:20px;background:#f9f9f9;">
                <h2 style="color:#2c3e50;text-align:center;">New Contact Form Submission</h2>
                <hr style="border:none;border-top:1px solid #eee;">
                <p style="font-size:16px;"><strong>Name:</strong> ' . $data['name'] . '</p>
                <p style="font-size:16px;"><strong>Email:</strong> ' . $data['email'] . '</p>
                <p style="font-size:16px;"><strong>Subject:</strong> ' . $data['subject'] . '</p>
                <p style="font-size:16px;"><strong>Message:</strong></p>
                <p style="background:#fff;padding:15px;border:1px solid #eee;border-radius:5px;">' . nl2br($data['message']) . '</p>
                <hr style="border:none;border-top:1px solid #eee;">
                <p style="text-align:center;font-size:12px;color:#999;">This message was sent from your website contact form.</p>
            </div>
        ';

        Mail::html($adminHtml, function ($mail) use ($data) {
            $mail->to(env('MAIL_TO'))   // admin email from .env
                ->subject('New Contact Form: ' . $data['subject'])
                ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });

        // 2️⃣ Email to User (Thank You)
        $userHtml = '
    <div style="font-family:Arial,sans-serif;max-width:600px;margin:auto;border:1px solid #ddd;padding:20px;background:#f9f9f9;">
        <h2 style="color:#2c3e50;text-align:center;">Thank You for Contacting Us!</h2>
        <p style="font-size:16px;">Hi ' . $data['name'] . ',</p>
        <p style="font-size:16px;">Thank you for reaching out. We have received your message and will get back to you as soon as possible.</p>
        <p style="font-size:16px;"><strong>Your Message:</strong></p>
        <p style="background:#fff;padding:15px;border:1px solid #eee;border-radius:5px;">' . nl2br($data['message']) . '</p>
        <p style="font-size:16px;">Best Regards,<br>Your Company Name</p>
        <hr style="border:none;border-top:1px solid #eee;">
        <p style="text-align:center;font-size:12px;color:#999;">This is an automated email. Please do not reply.</p>
    </div>
    ';

        Mail::html($userHtml, function ($mail) use ($data) {
            $mail->to($data['email'])   // user email
                ->subject('Thank You for Contacting Us')
                ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });

        return back()->with('success', 'Thank you! Your message has been sent.');
    }
}