<?php
namespace KPO\System\Classes;

class Logger {
    public function log(string $controller, string $content) :void {
        $filename = $this->generate_filename();

        if (!file_exists($filename)) {
            $this->generate_file();
        }

        $file = fopen($filename, 'ab');
        $timestamp = date('Y-m-d H:i:s');
        $log_content = "$timestamp - $controller - $content";

        fwrite($file, $log_content . PHP_EOL);
        fclose($file);
    }

    private function generate_file() : void {
        $filename = $this->generate_filename();
        $file = fopen($filename, 'wb');

        if ($file === false) {
            return;
        }

        fclose($file);
    }

    private function generate_filename() :string {
        return 'logs/' . date('Ymd') . '.log';
    }
}