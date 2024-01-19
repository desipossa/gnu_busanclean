<?php
$cate_num = 1;
$page_num = 1;
$cate_tit = '깔끄미청소';
$page_tit = '깔끄미청소소개';
include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>

<? include G5_THEME_PATH.'/doc/content.head.php';?>

<ul class="tab">
    <li><a href="m011.php?t=1">첫본쨰 텝</a></li>
    <li><a href="m011.php?t=2">두본쨰 텝</a></li>
</ul>

<style>
    .tab li.on a {
        color: tomato;
    }
</style>

<script>
    $(function(){
        let N = '<?=$_GET['t'];?>' ? '<?=$_GET['t'];?>' : 1;
        N && $('.tab li').eq(N-1).addClass('on');
        
    })
</script>

<div class="con_wrap">
    <h3>똑소리나게 일잘하는 부산 청소업체 부산아파트입주청소 깔끄미청소</h3>
    <p>
    홈페이지를 찾아주시는 고객 여러분 감사합니다.<br/>
    합리적인 견적으로 정말 똑소리나게 일잘하는 부산 청소업체 부산아파트입주청소 금맥청소입니다.
    </p>

    <p>
    최상의 제품과 최고의 서비스를 제공하기 위해 고객께 최선을 다하는 부산아파트입주청소 금맥청소 되겠습니다.<br/>
    감사합니다.<br/>
    부산 청소 전문업체 부산아파트입주청소.<br/>
    </p>

    <strong>대표 전정선</strong>

    <hr>

    <table class="default_table">
        <caption>회사소개</caption>
        <colgroup>
            <col style="width:100px">
            <col>
        </colgroup>
        <tbody>
            <tr>
                <th>주소</th>
                <td>부산광역시 북구 만덕2로 14 상가동 제314호</td>
            </tr>
            <tr>
                <th>전화번호</th>
                <td>051-331-3354 </td>
            </tr>
            <tr>
                <th>대표</th>
                <td>전정선</td>
            </tr>
        </tbody>
    </table>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>