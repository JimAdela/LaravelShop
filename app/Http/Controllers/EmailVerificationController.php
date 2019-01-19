<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidRequestException;
use App\Models\User;
use App\Notifications\EmailVerificationNotification;
use Cache;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller {
	public function verify(Request $request) {
		//从url中取 'name' 和 'token' 参数
		$email = $request->input('email');
		$token = $request->input('token');
		//如果有一个为空说明不是一个合法的验证链接,直接抛出异常
		if (!$email || !$token) {
			throw new InvalidRequestException('验证码不正确');
		}
		if ($token != Cache::get('email_verification_' . $email)) {
			throw new InvalidRequestException('验证链接不正确或已过期');
		}
		if (!$user = User::where('email', $email)->first()) {
			throw new InvalidRequestException('用户不存在');
		}
		Cache::forget('email_verification_' . $email);
		$user->update(['email_verified' => true]);

		return view('pages.success', ['msg' => '邮箱验证成功']);
	}

	public function send(Request $request) {
		$user = $request->user();
		if ($user->email_verified) {
			throw new InvalidRequestException('你已经验证过邮箱了');
		}
		$user->notify(new EmailVerificationNotification());
		return view('pages.success', ['msg' => '邮件发送成功']);
	}
}
