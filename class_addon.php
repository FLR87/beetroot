<?
abstract class Downloader
{
    const BASE_DOWNLOAD_FOLDER = 'upload';
    private $fileName;
    function __construct($fileName) {
        $this->fileName = $fileName;
    }
    public function getFileName() {
        return $this->fileName;
    }
    static function getInstance($fileName) {
        if ($mimeType = mime_content_type(self::BASE_DOWNLOAD_FOLDER . '/' . $fileName)) {
            if ($mimeType == 'image/jpeg') {
                return new ImageDownloader($fileName);
            }
            if (in_array($mimeType,['video/mp4','avi','fvl'])) {
                return new VideoDownloader($fileName);
            }
        }
    }
    public function copyUploadFile($sourceFileName, $destFileName) {
        if (!$sourceFileName || !$destFileName) {
            return false;
        }
        if (copy(self::BASE_DOWNLOAD_FOLDER . '/' . $sourceFileName, self::BASE_DOWNLOAD_FOLDER . '/' . $destFileName)) {
            return true;
        }
        return false;
    }
    abstract function makeSomeProcess();
}
class ImageDownloader extends Downloader
{
    const DOWNLOAD_PATH = 'images';
    public function makeSomeProcess() {
        /**
        Оптимизации изображения
         */
        if (!$this->copyUploadFile($this->getFileName(), self::DOWNLOAD_PATH . '/' . $this->getFileName())) {
            return 'Процесс для изображений завершился некорректно';
        }
        return 'Процесс для изображений завершился корректно';
    }
}
class VideoDownloader extends Downloader
{
    const DOWNLOAD_PATH = 'video';
    private $description = 'Video downloader class';
    function __get($propertyName) {
    }
    public function makeSomeProcess() {
        if (!$this->copyUploadFile($this->getFileName(), self::DOWNLOAD_PATH . '/' . $this->getFileName())) {
            return 'Процесс для видео завершился некорректно';
        }
        return 'Процесс для видео завершился корректно';
    }
}
$downloadObject = Downloader::getInstance('SampleVideo.mp4');
echo $downloadObject->makeSomeProcess();
//$videoObject = new VideoDownloader();
//echo $videoObject;