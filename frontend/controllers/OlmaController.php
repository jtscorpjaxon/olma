<?php

namespace frontend\controllers;

use common\models\OlmaHosil;
use common\models\OlmaQidirsh;
use Yii;
use common\models\Olmalar;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\helpers\Json;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * OlmaController implements the CRUD actions for Olmalar model.
 */
class OlmaController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        /*return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];*/
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Olmalar models.
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModel = new OlmaQidirsh();
        $appleGenerateForm=new OlmaHosil();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'appleGenerateForm'=>$appleGenerateForm
        ]);
    }

    /**
     * Displays a single Olmalar model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionChangeSize(){
        if($_POST['editableKey']){
            $model=Olmalar::findOne(['id'=>$_POST['editableKey']]);
            try {
                $model->eat($_POST['Olmalar'][$_POST['editableIndex']]['yeyilgani']);
                $model->save();
                echo Json::encode(['output'=>number_format($model->yeyilgani,2)]);
            } catch (\Exception $e){
                echo Json::encode(['message'=>$e->getMessage()]);
            }
        }
    }

    /**
     * Fall To Ground Apple.
     * @return mixed
     */
    public function actionFallToGround(int $id){
        $model=Olmalar::findOne(['id'=>$id]);
        if(!$model) throw new HttpException(404,'Apple is not exist');
        $model->holati="tushdi";
        $model->save();
        return $this->redirect(['index']);
    }

    /**
     * Generate Apple models.
     * If generate is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionGenerate()
    {
        $model=new OlmaHosil();
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            for($i=0;$i<$model->quantity;$i++){
                $apple=new Olmalar();
                $apple->save();
            }
        }
        return $this->redirect(['index']);
    }

    /**
     * Deletes an existing Apple model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Apple model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Apple the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Olmalar::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
