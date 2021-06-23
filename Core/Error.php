<?php

namespace Core;


class Error
{

  public static function errorHandler($level, $message, $file, $line)
  {

    if (error_reporting() !== 0) {
      throw new \ErrorException($message, 0, $level, $file, $line);
    }
  }
  public static function exceptionHandler($exception)
  {
    $code = $exception->getCode();
    if ($code != 400) {
      $code = 500;
    }

    http_response_code($code);

    if (\App\Config::SHOW_ERRORS) {
      echo "<h1> Fatal Error</h1>";
      echo "<p>Uncaught Exception: '" . get_class($exception) . "'</p>";
      echo "<p>Message: '" . $exception->getMessage() . "'</p>";
      echo "<p>Stack Trace:<pre>" . $exception->getTraceAsString() . "</pre></p>";
      echo "<p>Thrown in '" . $exception->getFile() . "' on line " . $exception->getLine() . "</p>";
    } else {
      $log = dirname(__DIR__) . "/logs" . date('y-m-d') . ".txt";

      $message = "Uncaught Exception: '" . get_class($exception);
      $message .= "Message: '" . $exception->getMessage();
      $message .= "Stack Trace: " . $exception->getTraceAsString();
      $message .= "Thrown in '" . $exception->getFile() . "' on line " . $exception->getLine();

      error_log($message);
      // echo "<h1>An error has happened</h1>";
      // if ($code == 404) {
      //   echo "<h1> Page not found</h1>";
      // } else {
      //   echo "<h1> An error occurred</h1>";
      // }
      View::renderTemplate("$code.html");
    }
  }
}
