<?php

namespace pxgamer\WorldWideTorrents;

/**
 * Class Uploader
 */
class Uploader
{
    const BASE_URL = 'https://worldwidetorrents.me/api';

    /**
     * @param string $api_key
     * @param array  $content_data
     *
     * @return array|bool|mixed
     */
    public static function upload($api_key, $content_data)
    {
        if (!isset($content_data['torrent_file'], $content_data['name'], $content_data['category_id'])) {
            return ['status' => 'failed', 'error' => 'missing post data'];
        }

        if (!file_exists($content_data['torrent_file'])) {
            return ['status' => 'failed', 'error' => 'file does not exist'];
        }

        $content_data['torrent_file'] = curl_file_create($content_data['torrent_file']);

        $headers = [
            'X-Authorization: '.$api_key,
        ];

        $cu = curl_init();

        curl_setopt_array(
            $cu,
            [
                CURLOPT_URL => self::BASE_URL.'/account/upload/',
                CURLOPT_HTTPHEADER => $headers,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $content_data,
            ]
        );

        $cu_result = curl_exec($cu);

        if (is_string($cu_result)) {
            return json_decode($cu_result, true);
        } else {
            return ['status' => 'failed', 'error' => 'unknown'];
        }
    }
}
