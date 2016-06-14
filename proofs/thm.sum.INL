Hi Geoff, go and have some cold beer while I am trying to solve this very hard problem!
% remaining time: 300 next slice time: 5
dis+11_7_3 on thm.sum
% Refutation found. Thanks to Tanya!
% SZS status Theorem for thm.sum
% SZS output start Proof for thm.sum
fof(f9232,plain,(
  $false),
  inference(sat_splitting_refutation,[],[f9226,f9023,f9029])).
fof(f9029,plain,(
  s(sK0,sK3(sK2,sK1,sK0)) = s(sK0,'const.sum.OUTL_1'(s('type.sum.sum'(sK0,sK1),sK2))) | $spl102),
  inference(cnf_transformation,[],[f9029_D])).
fof(f9029_D,plain,(
  s(sK0,sK3(sK2,sK1,sK0)) = s(sK0,'const.sum.OUTL_1'(s('type.sum.sum'(sK0,sK1),sK2))) <=> ~$spl102),
  introduced(sat_splitting_component,[new_symbols(naming,[$spl102])])).
fof(f9023,plain,(
  s(sK0,sK3(sK2,sK1,sK0)) = s(sK0,'const.sum.OUTL_1'(s('type.sum.sum'(sK0,sK1),sK2)))),
  inference(trivial_inequality_removal,[],[f8999])).
fof(f8999,plain,(
  s(bool,'T_0') != s(bool,'T_0') | s(sK0,sK3(sK2,sK1,sK0)) = s(sK0,'const.sum.OUTL_1'(s('type.sum.sum'(sK0,sK1),sK2)))),
  inference(superposition,[],[f1661,f131])).
fof(f131,plain,(
  s(bool,'T_0') = s(bool,'const.sum.ISL_1'(s('type.sum.sum'(sK0,sK1),sK2)))),
  inference(resolution,[],[f89,f81])).
fof(f81,plain,(
  p(s(bool,'const.sum.ISL_1'(s('type.sum.sum'(sK0,sK1),sK2))))),
  inference(cnf_transformation,[],[f63])).
fof(f63,plain,(
  p(s(bool,'const.sum.ISL_1'(s('type.sum.sum'(sK0,sK1),sK2)))) & s('type.sum.sum'(sK0,sK1),sK2) != s('type.sum.sum'(sK0,sK1),'const.sum.INL_1'(s(sK0,'const.sum.OUTL_1'(s('type.sum.sum'(sK0,sK1),sK2)))))),
  inference(skolemisation,[status(esa),new_symbols(skolem,[sK0,sK1,sK2])],[f53])).
fof(f53,plain,(
  ? [X0,X1,X2] : (p(s(bool,'const.sum.ISL_1'(s('type.sum.sum'(X0,X1),X2)))) & s('type.sum.sum'(X0,X1),X2) != s('type.sum.sum'(X0,X1),'const.sum.INL_1'(s(X0,'const.sum.OUTL_1'(s('type.sum.sum'(X0,X1),X2))))))),
  inference(ennf_transformation,[],[f25])).
fof(f25,plain,(
  ~! [X0,X1,X2] : (p(s(bool,'const.sum.ISL_1'(s('type.sum.sum'(X0,X1),X2)))) => s('type.sum.sum'(X0,X1),X2) = s('type.sum.sum'(X0,X1),'const.sum.INL_1'(s(X0,'const.sum.OUTL_1'(s('type.sum.sum'(X0,X1),X2))))))),
  inference(flattening,[],[f24])).
fof(f24,plain,(
  ~! [X0,X1] : ! [X2] : (p(s(bool,'const.sum.ISL_1'(s('type.sum.sum'(X0,X1),X2)))) => s('type.sum.sum'(X0,X1),X2) = s('type.sum.sum'(X0,X1),'const.sum.INL_1'(s(X0,'const.sum.OUTL_1'(s('type.sum.sum'(X0,X1),X2))))))),
  inference(rectify,[],[f6])).
fof(f6,negated_conjecture,(
  ~! [X6,X7] : ! [X8] : (p(s(bool,'const.sum.ISL_1'(s('type.sum.sum'(X6,X7),X8)))) => s('type.sum.sum'(X6,X7),X8) = s('type.sum.sum'(X6,X7),'const.sum.INL_1'(s(X6,'const.sum.OUTL_1'(s('type.sum.sum'(X6,X7),X8))))))),
  inference(negated_conjecture,[],[f5])).
fof(f5,conjecture,(
  ! [X6,X7] : ! [X8] : (p(s(bool,'const.sum.ISL_1'(s('type.sum.sum'(X6,X7),X8)))) => s('type.sum.sum'(X6,X7),X8) = s('type.sum.sum'(X6,X7),'const.sum.INL_1'(s(X6,'const.sum.OUTL_1'(s('type.sum.sum'(X6,X7),X8))))))),
  file('thm.sum.INL','thm.sum.INL')).
fof(f89,plain,(
  ( ! [X0] : (~p(s(bool,X0)) | s(bool,'T_0') = s(bool,X0)) )),
  inference(cnf_transformation,[],[f64])).
fof(f64,plain,(
  ! [X0] : ((s(bool,'T_0') != s(bool,X0) | p(s(bool,X0))) & (~p(s(bool,X0)) | s(bool,'T_0') = s(bool,X0)))),
  inference(nnf_transformation,[],[f28])).
fof(f28,plain,(
  ! [X0] : (s(bool,'T_0') = s(bool,X0) <=> p(s(bool,X0)))),
  inference(rectify,[],[f17])).
fof(f17,axiom,(
  ! [X11] : (s(bool,'T_0') = s(bool,X11) <=> p(s(bool,X11)))),
  file('thm.sum.INL','thm.bool.EQ_CLAUSES|split|1')).
fof(f1661,plain,(
  ( ! [X4,X5,X3] : (s(bool,'T_0') != s(bool,'const.sum.ISL_1'(s('type.sum.sum'(X3,X4),X5))) | s(X3,sK3(X5,X4,X3)) = s(X3,'const.sum.OUTL_1'(s('type.sum.sum'(X3,X4),X5)))) )),
  inference(superposition,[],[f138,f349])).
fof(f349,plain,(
  ( ! [X4,X5,X3] : (s('type.sum.sum'(X3,X4),X5) = s('type.sum.sum'(X3,X4),'const.sum.INR_1'(s(X4,sK4(X5,X4,X3)))) | s(X3,sK3(X5,X4,X3)) = s(X3,'const.sum.OUTL_1'(s('type.sum.sum'(X3,X4),X5)))) )),
  inference(superposition,[],[f118,f119])).
fof(f119,plain,(
  ( ! [X2,X0,X1] : (s('type.sum.sum'(X0,X1),X2) = s('type.sum.sum'(X0,X1),'const.sum.INR_1'(s(X1,sK4(X2,X1,X0)))) | s('type.sum.sum'(X0,X1),X2) = s('type.sum.sum'(X0,X1),'const.sum.INL_1'(s(X0,sK3(X2,X1,X0))))) )),
  inference(cnf_transformation,[],[f79])).
fof(f79,plain,(
  ! [X0,X1,X2] : (s('type.sum.sum'(X0,X1),X2) = s('type.sum.sum'(X0,X1),'const.sum.INL_1'(s(X0,sK3(X2,X1,X0)))) | s('type.sum.sum'(X0,X1),X2) = s('type.sum.sum'(X0,X1),'const.sum.INR_1'(s(X1,sK4(X2,X1,X0)))))),
  inference(skolemisation,[status(esa),new_symbols(skolem,[sK3,sK4])],[f48])).
fof(f48,plain,(
  ! [X0,X1,X2] : (? [X4] : s('type.sum.sum'(X0,X1),X2) = s('type.sum.sum'(X0,X1),'const.sum.INL_1'(s(X0,X4))) | ? [X3] : s('type.sum.sum'(X0,X1),X2) = s('type.sum.sum'(X0,X1),'const.sum.INR_1'(s(X1,X3))))),
  inference(flattening,[],[f47])).
fof(f47,plain,(
  ! [X0,X1] : ! [X2] : (? [X4] : s('type.sum.sum'(X0,X1),X2) = s('type.sum.sum'(X0,X1),'const.sum.INL_1'(s(X0,X4))) | ? [X3] : s('type.sum.sum'(X0,X1),X2) = s('type.sum.sum'(X0,X1),'const.sum.INR_1'(s(X1,X3))))),
  inference(rectify,[],[f20])).
fof(f20,axiom,(
  ! [X6,X7] : ! [X12] : (? [X8] : s('type.sum.sum'(X6,X7),X12) = s('type.sum.sum'(X6,X7),'const.sum.INL_1'(s(X6,X8))) | ? [X13] : s('type.sum.sum'(X6,X7),X12) = s('type.sum.sum'(X6,X7),'const.sum.INR_1'(s(X7,X13))))),
  file('thm.sum.INL','thm.sum.sum_CASES')).
fof(f118,plain,(
  ( ! [X2,X0,X1] : (s(X1,X2) = s(X1,'const.sum.OUTL_1'(s('type.sum.sum'(X1,X0),'const.sum.INL_1'(s(X1,X2)))))) )),
  inference(cnf_transformation,[],[f46])).
fof(f46,plain,(
  ! [X0,X1,X2] : s(X1,X2) = s(X1,'const.sum.OUTL_1'(s('type.sum.sum'(X1,X0),'const.sum.INL_1'(s(X1,X2)))))),
  inference(flattening,[],[f45])).
fof(f45,plain,(
  ! [X0,X1] : ! [X2] : s(X1,X2) = s(X1,'const.sum.OUTL_1'(s('type.sum.sum'(X1,X0),'const.sum.INL_1'(s(X1,X2)))))),
  inference(rectify,[],[f23])).
fof(f23,axiom,(
  ! [X7,X6] : ! [X8] : s(X6,X8) = s(X6,'const.sum.OUTL_1'(s('type.sum.sum'(X6,X7),'const.sum.INL_1'(s(X6,X8)))))),
  file('thm.sum.INL','thm.sum.OUTL')).
fof(f138,plain,(
  ( ! [X4,X5,X3] : (s(bool,'T_0') != s(bool,'const.sum.ISL_1'(s('type.sum.sum'(X3,X4),'const.sum.INR_1'(s(X4,X5)))))) )),
  inference(resolution,[],[f120,f88])).
fof(f88,plain,(
  ( ! [X0] : (p(s(bool,X0)) | s(bool,'T_0') != s(bool,X0)) )),
  inference(cnf_transformation,[],[f64])).
fof(f120,plain,(
  ( ! [X2,X0,X1] : (~p(s(bool,'const.sum.ISL_1'(s('type.sum.sum'(X0,X1),'const.sum.INR_1'(s(X1,X2))))))) )),
  inference(cnf_transformation,[],[f50])).
fof(f50,plain,(
  ! [X0,X1,X2] : ~p(s(bool,'const.sum.ISL_1'(s('type.sum.sum'(X0,X1),'const.sum.INR_1'(s(X1,X2))))))),
  inference(flattening,[],[f49])).
fof(f49,plain,(
  ! [X0,X1] : ! [X2] : ~p(s(bool,'const.sum.ISL_1'(s('type.sum.sum'(X0,X1),'const.sum.INR_1'(s(X1,X2))))))),
  inference(rectify,[],[f22])).
fof(f22,axiom,(
  ! [X6,X7] : ! [X13] : ~p(s(bool,'const.sum.ISL_1'(s('type.sum.sum'(X6,X7),'const.sum.INR_1'(s(X7,X13))))))),
  file('thm.sum.INL','thm.sum.ISL|split|1')).
fof(f9226,plain,(
  $false | $spl102),
  inference(subsumption_resolution,[],[f9215,f131])).
fof(f9215,plain,(
  s(bool,'T_0') != s(bool,'const.sum.ISL_1'(s('type.sum.sum'(sK0,sK1),sK2))) | $spl102),
  inference(superposition,[],[f138,f9213])).
fof(f9213,plain,(
  s('type.sum.sum'(sK0,sK1),sK2) = s('type.sum.sum'(sK0,sK1),'const.sum.INR_1'(s(sK1,sK4(sK2,sK1,sK0)))) | $spl102),
  inference(trivial_inequality_removal,[],[f9212])).
fof(f9212,plain,(
  s('type.sum.sum'(sK0,sK1),sK2) != s('type.sum.sum'(sK0,sK1),sK2) | s('type.sum.sum'(sK0,sK1),sK2) = s('type.sum.sum'(sK0,sK1),'const.sum.INR_1'(s(sK1,sK4(sK2,sK1,sK0)))) | $spl102),
  inference(superposition,[],[f9204,f119])).
fof(f9204,plain,(
  s('type.sum.sum'(sK0,sK1),sK2) != s('type.sum.sum'(sK0,sK1),'const.sum.INL_1'(s(sK0,sK3(sK2,sK1,sK0)))) | $spl102),
  inference(backward_demodulation,[],[f9029,f82])).
fof(f82,plain,(
  s('type.sum.sum'(sK0,sK1),sK2) != s('type.sum.sum'(sK0,sK1),'const.sum.INL_1'(s(sK0,'const.sum.OUTL_1'(s('type.sum.sum'(sK0,sK1),sK2)))))),
  inference(cnf_transformation,[],[f63])).
% SZS output end Proof for thm.sum
% ------------------------------
% Version: Vampire 4.0 CASC-25 Entry
% Termination reason: Refutation

% Active clauses: 102
% Passive clauses: 1157
% Generated clauses: 8951
% Final active clauses: 76
% Final passive clauses: 900
% Input formulas: 22
% Initial clauses: 41
% 
% Duplicate literals: 479
% Trivial inequalities: 114
% Fw subsumption resolutions: 1252
% Fw demodulations: 990
% Bw demodulations: 24
% 
% Simple tautologies: 265
% Equational tautologies: 36
% Forward subsumptions: 4503
% Bw demodulations to eq. taut.: 1
% 
% Binary resolution: 286
% Factoring: 2
% Forward superposition: 3148
% Backward superposition: 2408
% Self superposition: 86
% Equality factoring: 64
% Equality resolution: 14
% 
% Split clauses: 108
% Split components: 226
% SAT solver clauses: 279
% SAT solver unit clauses: 11
% SAT solver binary clauses: 63
% SAT solver learnt clauses: 1
% 
% Sat splits: 108
% Sat splitting refutations: 5
% 
% TWLsolver clauses: 274
% TWLsolver calls for satisfiability: 80
% 
% Memory used [KB]: 3965
% Time elapsed: 0.185 s
% ------------------------------
% ------------------------------
% Success in time 0.188 s
