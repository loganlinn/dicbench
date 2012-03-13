<?php
namespace DICBench\DummyClasses;

class Logger {
	private static $count = 0;
	private $id;

	public function __construct() {
		$this->id = ++self::$count;
	}
	public function log($message) {
		echo "[LOG #{$this->id}] $message\n";
	}
}

class Session {
	protected $logger;
	protected $cookie_name;

	public function setLogger(Logger $logger) {
		$this->logger = $logger;
	}

	public function setCookieName($cookie_name) {
		$this->cookie_name = $cookie_name;
	}

	public function getCookieName() {
		return $this->cookie_name;
	}

	public function getLogger() {
		return $this->logger;
	}
}

class Auth {
	protected $session;

	public function setSession(Session $session) {
		$this->session = $session;
	}
}

class SomeService {
	protected $logger;
	protected $auth;

	public function setLogger(Logger $logger) {
		$this->logger = $logger;
	}

	public function setAuth(Auth $auth) {
		$this->auth = $auth;
	}
}

class Request {
	protected $auth;
	protected $session;

	public function setAuth(Auth $auth) {
		$this->auth = $auth;
	}

	public function setSession(Session $session) {
		$this->session = $session;
	}
}

class SomeController {
	protected $request;
	protected $logger;
	protected $someService;

	public function setRequest(Request $request) {
		$this->request = $request;
	}

	public function setLogger(Logger $logger) {
		$this->logger = $logger;
	}

	public function setSomeService(SomeService $service) {
		$this->someService = $service;
	}
}

