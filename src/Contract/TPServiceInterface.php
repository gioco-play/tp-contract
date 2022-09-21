<?php
declare(strict_types=1);
namespace GiocoPlus\TP\Contract;
/**
 *
 */
interface TPServiceInterface {

    /**
     * 遊戲啟動
     *
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $account
     * @param string $bet_id
     * @return mixed
     */
    function gameDetail(string $op_code, string $account, string $bet_id);

    /**
     * 抓取遊戲紀錄
     *
     * @param string $op_code
     * @param integer $past_minutes
     * @param string $cache_key
     * @return mixed
     */
    function betLogGrabber(string $op_code, int $past_minutes, string $cache_key);

    /**
     * 全營商 抓取遊戲紀錄
     *
     * @param integer $past_minutes
     * @return mixed
     */
    function betLogGrabberAll(int $past_minutes);

    /**
     * 會員帳號轉換(GF->TP)
     * @param string $op_code
     * @param array $vendor
     * @param string $member_code
     * @return mixed
     */
    function accountToVendor(string $op_code, array $vendor, string $member_code);

    /**
     * 會員帳號轉換(TP->GF)
     * @param string $op_code
     * @param array $vendor
     * @param string $vendor_account
     * @return mixed
     */
    function accountToOperator(string $op_code, array $vendor, string $vendor_account);
}

