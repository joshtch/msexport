<?php

/**
 * Default configuration file for msexport.php:
 * Export parts of MuseScore file as mp3 file (in different variations)
 *
 * (c) 2020-2025 moving-bits (https://github.com/moving-bits)
 * Distributed under Apache 2.0 license
 */

/**
 * @var $bUseSingleThreaded
 * true:  use single-threaded export routine
 * false: use multi-threaded export (requires PHP Parallel lib to be installed)
 */
$bUseSingleThreaded = true;

/**
 * @var $cWorkDir
 * folder for temporary files (full path without ending slash/backslash)
 */
// __DIR__ is the location of msexport.php. This folder must exist before you run msexport.php!
$cWorkDir = __DIR__ . DIRECTORY_SEPARATOR . 'temp';
// Suggested setting on macOS
//$cWorkDir = '/tmp';

/**
 * @var $cExportDir
 * target folder for created files (mp3/pdf) (full path without ending slash/backslash)
 */
$cExportDir = '.';

/**
 * @var $cMuseScore
 * full path to MuseScore executable file
 */
$cMuseScore = '"c:/program files/musescore 3/bin/musescore3.exe"';
// On macOS, if MuseScore was installed with Homebrew:
//$cMuseScore = '"/opt/homebrew/bin/mscore" 2>/dev/null';

/**
 * @var $acVoices
 * name prefixes which should declare a part as being a "voice" instrument
 */
$acVoices = ['soprano', 'alto', 'tenor', 'bass'];

/**
 * @var $aVoice
 * @var $aPiano
 * instrument for the primary voice and other voices, respectively
 * Translations: [soundfile number, instrument number]
 */
// [1, 57] = Clarinet in MuseScore default Soundfile
// [1, 52] = Choir Aah
// [1, 2] = Bright Grand Piano
$aVoice = [1, 2];
// [1, 0] = Grand Piano
// [1, 1] = Mellow Grand Piano
$aPiano = [1, 1];

/**
 * @var $iMaxThreads
 * number of max allowed parallel threads (multithreaded version only)
 */
$iMaxThreads = 4;
