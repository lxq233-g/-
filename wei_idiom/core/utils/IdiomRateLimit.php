<?php
 class IdiomRateLimit { private static $lock_fp; private static $lock_file; private static $unlink_after_lock = false; public static function lock($file_name = '') { goto xVaYt; M4UYs: Sq8H5: goto WFVp4; bsP9f: BE1IT: goto t3VXo; wkHH2: self::$lock_file = __DIR__ . "\x2f\x6c\x6f\x63\x6b\57\x6c\x6f\143\x6b\x2e\x74\170\x74"; goto JN7eY; JN7eY: A1IdL: goto RekOV; WFVp4: self::$lock_fp = fopen(self::$lock_file, "\167\53"); goto vg0hI; FAipm: fclose(self::$lock_fp); goto Lmd5R; l6y1D: self::$unlink_after_lock = true; goto M4UYs; xVaYt: if ('' === $file_name) { goto WNqhC; } goto ly4fX; nEheV: goto A1IdL; goto lzJqF; RekOV: if (empty($file_name)) { goto Sq8H5; } goto l6y1D; Lmd5R: response(-1, "\345\xa5\275\345\x83\x8f\xe5\xa4\xaa\xe5\xbf\253\xe4\xba\x86"); goto bsP9f; vg0hI: if (flock(self::$lock_fp, LOCK_EX)) { goto BE1IT; } goto FAipm; lzJqF: WNqhC: goto wkHH2; ly4fX: self::$lock_file = __DIR__ . "\x2f\x6c\157\x63\x6b\57{$file_name}\56\x74\x78\164"; goto nEheV; t3VXo: } public static function unlock() { goto uEhJf; Pklv0: if (!self::$unlink_after_lock) { goto FeeE4; } goto nf4p1; GNnCC: FeeE4: goto B8GWA; yEJ5v: fclose(self::$lock_fp); goto Pklv0; nf4p1: unlink(self::$lock_file); goto GNnCC; uEhJf: flock(self::$lock_fp, LOCK_UN); goto yEJ5v; B8GWA: } }