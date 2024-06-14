<?php
class Command {

    public function whois($domainName) {
        $status = false;
        $command = 'sudo whois -h whois.jprs.jp ' . $domainName . " | grep 'Status'";
        for ($i = 0; $i < 10; $i++) {
            exec($command, $output, $result);
            if ($result!=1) {
                if (preg_match('/Status/', $output)) {
                    $status = true;
                    break;
                }
            }

            sleep(3);
        }
        if ($status)
            return preg_match('/Suspended/', $output) ? 'Suspended' : 'Active';

        return $output;
    }
}
