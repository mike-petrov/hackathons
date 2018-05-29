using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class main : MonoBehaviour {

    public Button login;
    public InputField nik;
    public InputField pass;

    void Start () {
        login.onClick.AddListener(HandleClick);
    }

    void HandleClick()
    {
        if ((nik.text == "1") & (pass.text == "1"))
            Application.LoadLevel("2");
    }

}